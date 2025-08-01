<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Matches;
use App\Models\Team;
use App\Models\Series;
use App\Models\Game;
use App\Models\MatchHeroPick;
use App\Models\Hero;
use App\Models\Player;

class MatchManager extends Component
{
    public $seriesId;
    public $matches;
    public $series;
    public $scheduled_at;
    public $match_number;
    public $winner_id;
    public $match_id;
    public array $heroPicks = [];

    public function mount(Series $series)
    {
        $this->series = $series;
        $this->seriesId = $series->id;
        $this->series->tournament->game_id;
        $this->loadMatches();
    }

    public function loadMatches()
    {
        $this->matches = Matches::with([
            'winner',
            'matchHeroPicks.hero',
            'matchHeroPicks.player',
            'matchHeroPicks.team'
        ])
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
                'series_id'    => $this->series->id,
                'scheduled_at' => $this->scheduled_at,
                'match_number' => $this->match_number,
                'winner_id'    => $this->winner_id ?: null,
            ]
        );
    
        // Save hero picks
        if (!empty($this->heroPicks)) {
            MatchHeroPick::where('match_id', $match->id)->delete();
    
            $team1Id = $this->series->team1_id;
            $team2Id = $this->series->team2_id;
    
            $playerIds = array_keys($this->heroPicks);
    
            foreach ($playerIds as $index => $playerId) {
                $heroId = $this->heroPicks[$playerId];
    
                $teamId = $index < 5 ? $team1Id : $team2Id;
    
                if ($heroId) {
                    MatchHeroPick::create([
                        'match_id'  => $match->id,
                        'player_id' => $playerId,
                        'hero_id'   => $heroId,
                        'team_id'   => $teamId,
                    ]);
                }
            }
        }
    
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
        $this->heroPicks = MatchHeroPick::where('match_id', $match->id)
            ->get(['player_id', 'hero_id', 'team_id'])
            ->toArray();
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
        $heroes = Hero::where('game_id', $this->series->tournament->game_id)->get();
    
        return view('livewire.match-manager', compact('heroes'));
    }    
}
