<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Game;
use Illuminate\Http\Request;


class TeamController extends Controller
{
    public function show($id)
    {
        $team = Team::findOrFail($id);
        return view('teams.show', compact('team'));
    }
}
