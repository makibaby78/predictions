<?php

namespace App\Services;

use App\Models\Matches;
use App\Models\Team;

class PredictionService
{
    public function predictWinner(int $teamAId, int $teamBId): string
    {
        $teamAWins = Matches::where(function ($q) use ($teamAId) {
            $q->where('team_a_id', $teamAId)->whereColumn('team_a_score', '>', 'team_b_score');
        })->orWhere(function ($q) use ($teamAId) {
            $q->where('team_b_id', $teamAId)->whereColumn('team_b_score', '>', 'team_a_score');
        })->count();

        $teamATotal = Matches::where(function ($q) use ($teamAId) {
            $q->where('team_a_id', $teamAId)->orWhere('team_b_id', $teamAId);
        })->count();

        $teamBWins = Matches::where(function ($q) use ($teamBId) {
            $q->where('team_a_id', $teamBId)->whereColumn('team_a_score', '>', 'team_b_score');
        })->orWhere(function ($q) use ($teamBId) {
            $q->where('team_b_id', $teamBId)->whereColumn('team_b_score', '>', 'team_a_score');
        })->count();

        $teamBTotal = Matches::where(function ($q) use ($teamBId) {
            $q->where('team_a_id', $teamBId)->orWhere('team_b_id', $teamBId);
        })->count();

        $teamARate = $teamATotal > 0 ? $teamAWins / $teamATotal : 0;
        $teamBRate = $teamBTotal > 0 ? $teamBWins / $teamBTotal : 0;

        if ($teamARate > $teamBRate) {
            return Team::find($teamAId)->name;
        } elseif ($teamBRate > $teamARate) {
            return Team::find($teamBId)->name;
        }

        return 'Draw';
    }
}
