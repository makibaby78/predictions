<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function show(Tournament $tournament)
    {
        $tournament->load([
            'game',
            'teams.players',
            'matches.teamA',
            'matches.teamB'
        ]);

        return view('tournaments.show', compact('tournament'));
    }
}
