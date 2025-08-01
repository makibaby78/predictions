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
            'player_id' => 'required|exists:players,id',
        ]);
    
        $playerId = $validated['player_id'];
    
        // Avoid duplicate entries if already joined and not yet left
        $existing = DB::table('player_team')
            ->where('player_id', $playerId)
            ->where('team_id', $team->id)
            ->whereNull('left_at')
            ->first();
    
        if ($existing) {
            return back()->with('error', 'Player is already active in this team.');
        }
    
        // Add player to team
        $team->players()->attach($playerId, [
            'joined_at' => now(),
        ]);
    
        return back()->with('success', 'Player added to team!');
    }
        

    public function destroy(Player $player)
    {
        $teamId = $player->team_id;
        $player->delete();

        return redirect()->route('teams.show', $teamId)->with('success', 'Player removed!');
    }
}
