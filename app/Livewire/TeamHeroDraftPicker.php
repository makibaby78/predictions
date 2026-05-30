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

        $this->team1Id = 3;
        $this->team2Id = 35;

        $this->team1Players = $this->loadPlayers($this->team1Id);
        $this->team2Players = $this->loadPlayers($this->team2Id);

        $this->team1Picks = [];

        $heroIds1 = [94, 69, 4, 102, 31];

        foreach ($this->team1Players as $index => $player) {
            $this->team1Picks[$player->id] = $heroIds1[$index] ?? null;
        }

        $this->team2Picks = [];

        $heroIds2 = [2, 65, 37, 44, 112];

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

        $results = $this->calculateMatchups();

        $this->dispatch('calculated', $results);
    }

    public function calculateMatchups(): array
    {
        $picks = MatchHeroPick::with('match')->get();

        foreach ($picks as $pick) {
            dump([
                'hero_id' => $pick->hero_id,
                'team_id' => $pick->team_id,
                'is_win' => $pick->is_win,
            ]);
        }
    }


    public function render()
    {
        return view('livewire.team-hero-draft-picker');
    }
}