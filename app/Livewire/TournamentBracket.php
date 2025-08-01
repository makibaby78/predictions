<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Series;
use App\Models\Tournament;
use App\Models\Team;

class TournamentBracket extends Component
{
    public Tournament $tournament;

    public $editingMatch = null;
    public $isCreating = false;

    public $team1_id;
    public $team2_id;
    public $winner_id;
    public $round;
    public $bracket;
    public $group;
    public $stage;
    public $tournament_id;

    public function mount(Tournament $tournament)
    {
        $this->tournament = $tournament;
        $this->tournament_id = $tournament->id;
    }

    public function getSeriesProperty()
    {
        return Series::with(['teamA', 'teamB', 'winner'])
            ->where('tournament_id', $this->tournament->id)
            ->orderBy('stage')
            ->orderBy('group')
            ->orderBy('bracket')
            ->orderBy('round')
            ->get();
    }

    public function getTeamsProperty()
    {
        return Team::where('game_id', $this->tournament->game_id)->orderBy('name')->get();
    }

    public function editMatch($matchId)
    {
        $match = Series::findOrFail($matchId);

        $this->editingMatch = $match->id;
        $this->team1_id = $match->team1_id;
        $this->team2_id = $match->team2_id;
        $this->winner_id = $match->winner_id;
        $this->round = $match->round;
        $this->bracket = $match->bracket;
        $this->group = $match->group;
        $this->stage = $match->stage;
    }

    public function cancelEdit()
    {
        $this->reset([
            'editingMatch', 'team1_id', 'team2_id', 'winner_id',
            'round', 'bracket', 'group', 'stage',
        ]);
    }

    public function updateMatch()
    {
        $match = Series::findOrFail($this->editingMatch);

        $match->update([
            'team1_id' => $this->team1_id,
            'team2_id' => $this->team2_id,
            'winner_id' => $this->winner_id,
            'round' => $this->round,
            'bracket' => $this->bracket,
            'group' => $this->group,
            'stage' => $this->stage,
        ]);

        $this->cancelEdit();

        session()->flash('success', 'Match updated successfully.');
    }

    public function deleteMatch()
    {
        if ($this->editingMatch) {
            $match = Series::find($this->editingMatch);
            if ($match) {
                $match->delete();
                $this->cancelEdit();
                session()->flash('message', 'Match deleted successfully.');
            }
        }
    }

    public function createMatch()
    {
        Series::create([
            'tournament_id' => $this->tournament_id,
            'team1_id' => $this->team1_id,
            'team2_id' => $this->team2_id,
            'round' => $this->round,
            'bracket' => $this->bracket,
            'group' => $this->group,
            'stage' => $this->stage,
            'winner_id' => $this->winner_id,
        ]);

        $this->reset(['isCreating', 'team1_id', 'team2_id', 'round', 'bracket', 'group', 'stage', 'winner_id']);

        session()->flash('message', 'Match created successfully.');
    }

    public function render()
    {
        return view('livewire.tournament-bracket', [
            'teams' => $this->teams,
            'Series' => $this->Series,
        ]);
    }
}
