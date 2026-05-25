<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Hero;
use App\Models\Game;

class GameHeroes extends Component
{
    public $game;
    public $search = '';

    public function mount(Game $game)
    {
        $this->game = $game;
    }

    public function render()
    {
        $heroes = Hero::where('game_id', $this->game->id)
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                        ->orWhere('id', $this->search);
            })
            ->withCount([
                'picks as total_picks',
                'picks as wins' => function ($query) {
                    $query->whereIn('match_id', function ($subQuery) {
                        $subQuery->select('id')
                            ->from('matches')
                            ->whereColumn('matches.winner_id', 'match_hero_picks.team_id');
                    });
                }
            ])
            ->get();

        // Calculate win rate and sort heroes
        $heroes = $heroes->sortByDesc(function ($hero) {
            if ($hero->total_picks > 0) {
                return $hero->wins / $hero->total_picks;
            }

            return -1;
        })->values();

        return view('livewire.game-heroes', compact('heroes'));
    }
}
