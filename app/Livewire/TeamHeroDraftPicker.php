<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Team;
use App\Models\Tournament;
use App\Models\Hero;
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

    public function calculateMatchups(array $teamAPicks, array $teamBPicks)
    {
        $teamAPicks = array_filter($teamAPicks);
        $teamBPicks = array_filter($teamBPicks);

        if (empty($teamAPicks) && empty($teamBPicks)) {
            $this->results = null;
            return null;
        }

        $heroModel = new Hero();

        // --- PROCESS TEAM 1 (TEAM A) ---
        $team1Breakdown = [];
        $team1Sum = 0;
        foreach ($teamAPicks as $playerId => $heroId) {
            $stats = $heroModel->getHeroWinRate((int) $heroId);
            $winRate = $stats['win_rate'] ?? 0.0;
            
            $team1Sum += $winRate;
            $team1Breakdown[$playerId] = [
                'hero_id' => $heroId,
                'win_rate' => $winRate,
                'total_picks' => $stats['total_picks']
            ];
        }
        $team1Avg = count($teamAPicks) > 0 ? round($team1Sum / count($teamAPicks), 1) : 0.0;

        // --- PROCESS TEAM 2 (TEAM B) ---
        $team2Breakdown = [];
        $team2Sum = 0;
        foreach ($teamBPicks as $playerId => $heroId) {
            $stats = $heroModel->getHeroWinRate((int) $heroId);
            $winRate = $stats['win_rate'] ?? 0.0;

            $team2Sum += $winRate;
            $team2Breakdown[$playerId] = [
                'hero_id' => $heroId,
                'win_rate' => $winRate,
                'total_picks' => $stats['total_picks']
            ];
        }
        $team2Avg = count($teamBPicks) > 0 ? round($team2Sum / count($teamBPicks), 1) : 0.0;

        return [
            'team1_avg' => $team1Avg,
            'team2_avg' => $team2Avg,
            'team1_players' => $team1Breakdown,
            'team2_players' => $team2Breakdown,
        ];
    }

    public function calculate()
    {
        $this->results = $this->calculateMatchups($this->team1Picks, $this->team2Picks);
    }

    public function render()
    {
        return view('livewire.team-hero-draft-picker');
    }
}