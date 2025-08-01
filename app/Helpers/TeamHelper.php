<?php

namespace App\Helpers;

use App\Models\Series;

function getTeamWinRate($teamId, $tournamentId = null)
{
    $seriesQuery = Series::query()
        ->where(function ($q) use ($teamId) {
            $q->where('team1_id', $teamId)
              ->orWhere('team2_id', $teamId);
        })
        ->whereNotNull('winner_id'); // Only include Series with a winner

    if ($tournamentId) {
        $seriesQuery->where('tournament_id', $tournamentId);
    }

    $totalSeries = $seriesQuery->count();

    if ($totalSeries === 0) {
        return ['total' => 0, 'wins' => 0, 'winrate' => 0];
    }

    $winsQuery = Series::where('winner_id', $teamId);
    if ($tournamentId) {
        $winsQuery->where('tournament_id', $tournamentId);
    }

    $wins = $winsQuery->count();

    return [
        'total' => $totalSeries,
        'wins' => $wins,
        'winrate' => round(($wins / $totalSeries) * 100, 2),
    ];
}
