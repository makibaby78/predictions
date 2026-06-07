<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Team;
use App\Models\Tournament;
use App\Models\MatchHeroPick;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class TeamHeroDraftPicker extends Component
{
    public Tournament $tournament;

    public Collection $teams;
    public Collection $heroes;

    public $team1Id = null;
    public $team2Id = null;

    public Collection $team1Players;
    public Collection $team2Players;

    public array $team1Picks = [];
    public array $team2Picks = [];

    public ?array $results = null;
    public bool $isReversed = false;

    public function mount(Tournament $tournament)
    {
        $this->tournament = $tournament;

        $this->team1Players = collect();
        $this->team2Players = collect();

        $this->teams = Team::whereHas('tournaments', function ($q) {
            $q->where('tournaments.id', $this->tournament->id);
        })
        ->orderBy('name')
        ->get();

        $this->heroes = DB::table('heroes')
            ->where('game_id', $this->tournament->game_id)
            ->select('id', 'name')
            ->orderBy('name')
            ->get();

        //for testing only
        $this->team1Id = 48;
        $this->team2Id = 43;

        $this->team1Players = $this->loadPlayers($this->team1Id);
        $this->team2Players = $this->loadPlayers($this->team2Id);

        $this->team1Picks = [];

        $heroIds1 = [71, 104, 69, 70, 26];

        foreach ($this->team1Players as $index => $player) {
            $this->team1Picks[$player->id] = $heroIds1[$index] ?? null;
        }

        $this->team2Picks = [];

        $heroIds2 = [112, 30, 65, 4, 49];

        foreach ($this->team2Players as $index => $player) {
            $this->team2Picks[$player->id] = $heroIds2[$index] ?? null;
        }
    }

    public function getPickedHeroesProperty(): array
    {
        return array_values(array_filter(array_merge(
            $this->team1Picks,
            $this->team2Picks
        )));
    }

    public function updatedTeam1Id($value)
    {
        $this->handleTeamSelection($value, 'team1');
    }

    public function updatedTeam2Id($value)
    {
        $this->handleTeamSelection($value, 'team2');
    }

    protected function handleTeamSelection($value, string $side): void
    {
        $otherSide = $side === 'team1' ? 'team2' : 'team1';

        // prevent same team selection
        if (
            filled($value) &&
            $value == $this->{$otherSide . 'Id'}
        ) {
            $this->{$side . 'Id'} = null;

            $this->dispatch('notify', message: 'Teams must be different');
            return;
        }

        $this->{$side . 'Players'} = $this->loadPlayers($value);
        $this->{$side . 'Picks'} = [];
    }

    protected function loadPlayers($teamId): Collection
    {
        if (!$teamId) {
            return collect();
        }

        $team = $this->teams->firstWhere('id', $teamId);

        if (!$team) {
            return collect();
        }

        return $team->players()
            ->where('is_active', true)
            ->wherePivotNull('left_at')
            ->orderBy('name')
            ->get();
    }

    public function getIsInvalidTeamSelectionProperty(): bool
    {
        return filled($this->team1Id)
            && filled($this->team2Id)
            && $this->team1Id === $this->team2Id;
    }

    public function calculate(): void
    {
        if ($this->isInvalidTeamSelection) {
            $this->dispatch('notify', message: 'Please select different teams.');
            return;
        }

        $this->isReversed = false;
        $this->results = $this->calculateMatchups($this->team1Picks, $this->team2Picks);
    }

    public function reverse(): void
    {
        if (!$this->results) {
            return;
        }

        // Swap team IDs
        [$this->team1Id, $this->team2Id] = [$this->team2Id, $this->team1Id];

        // Swap player collections
        [$this->team1Players, $this->team2Players] = [$this->team2Players, $this->team1Players];

        // Swap picks
        [$this->team1Picks, $this->team2Picks] = [$this->team2Picks, $this->team1Picks];

        $this->isReversed = !$this->isReversed;

        // Recalculate from the new team1's perspective — overall stays in sync with the breakdown
        $this->results = $this->calculateMatchups($this->team1Picks, $this->team2Picks);
    }

    public function calculateMatchups(array $teamAPicks, array $teamBPicks)
    {
        // Eager load relationships to keep collection filters lightning fast
        $groupedPicks = MatchHeroPick::with('match.matchHeroPicks')->get()->groupBy('hero_id');

        $alliedHeroProbabilities = [];
        $playerProbabilitiesSum = 0;
        $playerCount = 0;

        foreach ($teamAPicks as $playerOneId => $heroOneId) {

            $heroPicks = $groupedPicks->get($heroOneId, collect());

            $enemyWinRates = [];
            $activeMatchupCount = 0;
            $matchupDetails = [];

            foreach ($teamBPicks as $playerTwoId => $heroTwoId) {

                // Get all matches where Hero One played AGAINST Hero Two
                $matchupPicks = $heroPicks->filter(function ($pick) use ($heroTwoId) {
                    return $pick->match?->matchHeroPicks->contains(function ($otherPick) use ($pick, $heroTwoId) {
                        return $otherPick->hero_id === $heroTwoId
                            && $otherPick->team_id !== $pick->team_id;
                    });
                });

                $matchupCount = $matchupPicks->count();

                // Only factor into the win probability if a historical matchup exists
                if ($matchupCount > 0) {
                    $matchupWins = $matchupPicks->filter(function ($pick) {
                        return $pick->is_win === true;
                    })->count();

                    $matchupWinRate = ($matchupWins / $matchupCount) * 100;

                    $enemyWinRates[] = $matchupWinRate;
                    $activeMatchupCount++;

                    $matchupDetails[] = [
                        'enemy_hero_id' => $heroTwoId,
                        'win_rate'      => round($matchupWinRate, 2),
                        'games'         => $matchupCount,
                    ];
                }
            }

            // Calculate individual dynamic average (neutral 50% baseline fallback)
            $winProbability = $activeMatchupCount > 0
                ? array_sum($enemyWinRates) / $activeMatchupCount
                : 50.0;

            // Accumulate individual probabilities for the overall team average calculation
            $playerProbabilitiesSum += $winProbability;
            $playerCount++;

            // Store player specific breakdown
            $alliedHeroProbabilities[$playerOneId] = [
                'hero_id'                  => $heroOneId,
                'active_matchups_counted'  => $activeMatchupCount,
                'win_probability'          => round($winProbability, 2),
                'win_probability_formatted'=> round($winProbability, 2) . '%',
                'matchups'                 => $matchupDetails,
            ];
        }

        $teamCombinedProbability = $playerCount > 0 ? $playerProbabilitiesSum / $playerCount : 50.0;

        //dd($teamCombinedProbability);

        return [
            'team_win_probability'           => round($teamCombinedProbability, 2),
            'team_win_probability_formatted' => round($teamCombinedProbability, 2) . '%',
            'players'                        => $alliedHeroProbabilities
        ];
    }

    public function render()
    {
        return view('livewire.team-hero-draft-picker');
    }
}