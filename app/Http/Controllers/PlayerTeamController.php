<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PlayerTeamController extends Controller
{
    public function leave($teamId, $playerId)
    {
        // Assuming `player_team` is the pivot table name
        \DB::table('player_team')
            ->where('team_id', $teamId)
            ->where('player_id', $playerId)
            ->whereNull('left_at') // Optional: only update if still active
            ->update([
                'left_at' => Carbon::now(),
                'updated_at' => Carbon::now(), // optional
            ]);

        return back()->with('message', 'Player marked as left.');
    }
}
