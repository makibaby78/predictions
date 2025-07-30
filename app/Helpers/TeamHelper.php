<?php

namespace App\Helpers;

use App\Models\Matches;

function getTeamWinRate($teamId, $tournamentId = null)
{
    $matchesQuery = Matches::query()
        ->where(function ($q) use ($teamId) {
            $q->where('team1_id', $teamId)
              ->orWhere('team2_id', $teamId);
        })
        ->whereNotNull('winner_id'); // Only include matches with a winner

    if ($tournamentId) {
        $matchesQuery->where('tournament_id', $tournamentId);
    }

    $totalMatches = $matchesQuery->count();

    if ($totalMatches === 0) {
        return ['total' => 0, 'wins' => 0, 'winrate' => 0];
    }

    $winsQuery = Matches::where('winner_id', $teamId);
    if ($tournamentId) {
        $winsQuery->where('tournament_id', $tournamentId);
    }

    $wins = $winsQuery->count();

    return [
        'total' => $totalMatches,
        'wins' => $wins,
        'winrate' => round(($wins / $totalMatches) * 100, 2),
    ];
}
