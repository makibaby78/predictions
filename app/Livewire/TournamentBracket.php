<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Matches;
use App\Models\Tournament;

class TournamentBracket extends Component
{
    public Tournament $tournament;

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

    public function render()
    {
        return view('livewire.tournament-bracket');
    }
}
