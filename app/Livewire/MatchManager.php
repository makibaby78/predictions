<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Matches;
use App\Models\Team;
use App\Models\Series;
use App\Models\Game;

class MatchManager extends Component
{
    public $seriesId;
    public $matches;
    public $series;
    public $scheduled_at;
    public $match_number;
    public $winner_id;
    public $match_id;

    public function mount(Series $series)
    {
        $this->series = $series;
        $this->seriesId = $series->id;

        $this->loadMatches();
    }

    public function loadMatches()
    {
        $this->matches = Matches::with(['team1', 'team2', 'winner'])
            ->where('series_id', $this->seriesId)
            ->orderBy('match_number')
            ->get();
    }

    public function saveMatch()
    {
        $this->validate([
            'scheduled_at' => 'required|date',
            'match_number' => 'required|integer',
        ]);
    
        $match = Matches::updateOrCreate(
            ['id' => $this->match_id],
            [
                'series_id'     => $this->series->id,
                'scheduled_at'  => $this->scheduled_at,
                'match_number'  => $this->match_number,
                'winner_id'     => $this->winner_id ?: null,
            ]
        );
    
        $this->resetInput();
        $this->loadMatches();
    }       

    public function editMatch($id)
    {
        $match = Matches::findOrFail($id);
        $this->match_id = $match->id;
        $this->scheduled_at = $match->scheduled_at;
        $this->match_number = $match->match_number;
        $this->winner_id = $match->winner_id;
    }

    public function deleteMatch($id)
    {
        Matches::findOrFail($id)->delete();
        $this->loadMatches();
    }

    public function resetInput()
    {
        $this->reset(['match_id', 'scheduled_at', 'match_number', 'winner_id']);
    }

    public function render()
    {
        $teams = Team::all();
        return view('livewire.match-manager', compact('teams'));
    }
}
