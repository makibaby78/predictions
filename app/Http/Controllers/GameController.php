<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Game;
use App\Models\Tournament;
use App\Models\Player;
use Carbon\Carbon;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();

        return view('games.index', compact('games'));
    }

    public function tournament($id)
    {
        $game = Game::findOrFail($id);

        $tournaments = Tournament::where('game_id', $game->id)
        ->where('end_date', '>=', Carbon::today())
        ->get();

        return view('games.teams', compact('game', 'tournaments'));
    }

    public function heroes($game)
    {
        $heroes = Hero::where('game_id', $game)
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
            return -1; // Put heroes with 0 picks at the bottom
        })->values(); // Re-index collection
    
        return view('games.heroes', compact('heroes'));
    }

    public function players($game)
    {
        $players = Player::where('game_id', $game)
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
        $players = $players->sortByDesc(function ($player) {
            if ($player->total_picks > 0) {
                return $player->wins / $player->total_picks;
            }
            return -1;
        })->values();
    
        return view('games.players', compact('players'));
    }
    
}
