<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PlayerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games', [GameController::class, 'index'])->name('games.index');

Route::get('/games/{game}/teams', function (\App\Models\Game $game) {
    return view('games.teams', compact('game'));
})->name('games.teams.index');

Route::get('/teams/{team}', [TeamController::class, 'show'])->name('teams.show');

// For adding a player
Route::post('/teams/{team}/players', [PlayerController::class, 'store'])->name('players.store');

// For removing a player
Route::delete('/players/{player}', [PlayerController::class, 'destroy'])->name('players.destroy');


Route::get('/tournaments', [TournamentController::class, 'index'])->name('tournament.index');
Route::get('/tournaments/create', [TournamentController::class, 'create'])->name('tournament.create');
Route::post('/tournaments', [TournamentController::class, 'store'])->name('tournament.store');

Route::get('/tournament/{tournament}', [TournamentController::class, 'show'])->name('tournament.show');
