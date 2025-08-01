<?php

namespace App\Http\Controllers;
use App\Models\Team;
use App\Models\Player;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function store(Request $request, Team $team)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
        ]);

        $team->players()->create($validated);

        return redirect()->route('teams.show', $team)->with('success', 'Player added!');
    }

    public function destroy(Player $player)
    {
        $teamId = $player->team_id;
        $player->delete();

        return redirect()->route('teams.show', $teamId)->with('success', 'Player removed!');
    }
}
