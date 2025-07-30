<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Matches;
use App\Models\Tournament;

class TournamentBracket extends Component
{
    public Tournament $tournament;

    public $editingMatch = null;
    public $teamA_id;
    public $teamB_id;
    public $winner_id;
    public $teamA_name;
    public $teamB_name;

    public function mount(Tournament $tournament)
    {
        $this->tournament = $tournament;
    }

    public function getMatchesProperty()
    {
        return Matches::with(['teamA', 'teamB', 'winner'])
            ->where('tournament_id', $this->tournament->id)
            ->orderBy('stage')
            ->orderBy('group')
            ->orderBy('bracket')
            ->orderBy('round')
            ->get();
    }

    public function editMatch($matchId)
    {
        $match = Matches::findOrFail($matchId);
        $this->editingMatch = $match->id;
        $this->teamA_id = $match->team1_id;
        $this->teamB_id = $match->team2_id;
        $this->winner_id = $match->winner_id;
    }

    public function updateMatch()
    {
        $match = Matches::findOrFail($this->editingMatch);
        $match->team1_id = $this->teamA_id;
        $match->team2_id = $this->teamB_id;
        $match->winner_id = $this->winner_id;
        $match->save();

        $this->editingMatch = null;
        session()->flash('success', 'Match updated successfully!');
    }

    public function cancelEdit()
    {
        $this->editingMatch = null;
    }

    public function getTeamsProperty()
    {
        return \App\Models\Team::orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.tournament-bracket', [
            'teams' => $this->teams,
        ]);
    }
}
