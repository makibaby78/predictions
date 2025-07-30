<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TournamentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tournaments', [TournamentController::class, 'index'])->name('tournament.index');
Route::get('/tournaments/create', [TournamentController::class, 'create'])->name('tournament.create');
Route::post('/tournaments', [TournamentController::class, 'store'])->name('tournament.store');

Route::get('/tournament/{tournament}', [TournamentController::class, 'show'])->name('tournament.show');
