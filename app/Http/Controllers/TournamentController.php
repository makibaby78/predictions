<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Series;

class TournamentController extends Controller
{
    public function show(Tournament $tournament)
    {
        $tournament->load([
            'game',
            'teams.players',
            'series.teamA',
            'series.teamB'
        ]);

        return view('tournaments.show', compact('tournament'));
    }

    public function index()
    {
        $tournaments = Tournament::with('game')->latest()->get();

        return view('tournaments.index', compact('tournaments'));
    }

    public function create()
    {
        $games = Game::all(); // for the game select dropdown
        return view('tournaments.create', compact('games'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'game_id' => 'required|exists:games,id',
            'name' => 'required|string|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        Tournament::create($validated);

        return redirect()->route('tournament.index')->with('success', 'Tournament created successfully!');
    }

    public function showSeries(Tournament $tournament, Series $series)
    {
        // Optional: Validate that the series belongs to the tournament
        if ($series->tournament_id !== $tournament->id) {
            abort(404); // or redirect or throw an exception
        }

        return view('tournaments.series.show', compact('tournament', 'series'));
    }
}
