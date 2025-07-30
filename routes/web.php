<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TournamentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tournament/{tournament}', [TournamentController::class, 'show'])->name('tournament.show');
