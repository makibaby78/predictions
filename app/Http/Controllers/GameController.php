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

    public function overview($id)
    {
        $game = Game::findOrFail($id);

        $ongoingTournaments  = Tournament::where('game_id', $game->id)
        ->where('end_date', '>=', Carbon::today())
        ->orderBy('start_date', 'asc')
        ->get();

        $pastTournaments = Tournament::where('game_id', $game->id)
        ->where('end_date', '<', Carbon::today())
        ->orderBy('end_date', 'desc')
        ->get();

        return view('games.overview', compact('game', 'ongoingTournaments', 'pastTournaments'));
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
