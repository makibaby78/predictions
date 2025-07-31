<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = \App\Models\Game::all(); // or paginate if you want

        return view('games.index', compact('games'));
    }
}
