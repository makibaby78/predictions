<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\DB;

class Matches extends Model
{
    protected $table = 'matches';

    protected $fillable = [
        'series_id',
        'winner_id',
        'match_number',
        'tournament_id',
    ];

    public function series()
    {
        return $this->belongsTo(Series::class);
    }

    protected function team1(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->series?->team1
        );
    }

    protected function team2(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->series?->team2
        );
    }

    public function matchHeroPicks()
    {
        return $this->hasMany(MatchHeroPick::class, 'match_id');
    }

    public function winner()
    {
        return $this->belongsTo(Team::class, 'winner_id');
    }    

    protected function team1DraftWinrate(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->calculateTeamDraftWinrate($this->series?->teamA?->id)
        );
    }

    protected function team2DraftWinrate(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->calculateTeamDraftWinrate($this->series?->teamB?->id)
        );
    }

    /**
     * Optimized helper to compute the tournament-filtered draft average win rate
     */
    protected function calculateTeamDraftWinrate(?int $teamId): ?float
    {
        if (!$teamId) {
            return null;
        }

        // 1. Get the hero IDs picked by this team in this match
        $heroIds = $this->matchHeroPicks
            ->where('team_id', $teamId)
            ->pluck('hero_id')
            ->filter()
            ->toArray();

        if (empty($heroIds)) {
            return 0.0;
        }

        // 2. Query A: Fetch tournament stats using your MatchHeroPick model
        $tournamentStats = MatchHeroPick::join('matches', 'matches.id', '=', 'match_hero_picks.match_id')
            ->whereIn('match_hero_picks.hero_id', $heroIds)
            ->where('matches.tournament_id', $this->tournament_id)
            ->whereNotNull('matches.winner_id')
            ->select(
                'match_hero_picks.hero_id',
                \DB::raw('COUNT(*) as total_picks'),
                \DB::raw('SUM(CASE WHEN match_hero_picks.team_id = matches.winner_id THEN 1 ELSE 0 END) as wins')
            )
            ->groupBy('match_hero_picks.hero_id')
            ->get() // Returns a lightweight collection of anonymous objects, NOT full models
            ->keyBy('hero_id');

        // 3. Query B: Fetch All-Time history stats using your MatchHeroPick model
        $allTimeStats = MatchHeroPick::join('matches', 'matches.id', '=', 'match_hero_picks.match_id')
            ->whereIn('match_hero_picks.hero_id', $heroIds)
            ->whereNotNull('matches.winner_id')
            ->select(
                'match_hero_picks.hero_id',
                \DB::raw('COUNT(*) as total_picks'),
                \DB::raw('SUM(CASE WHEN match_hero_picks.team_id = matches.winner_id THEN 1 ELSE 0 END) as wins')
            )
            ->groupBy('match_hero_picks.hero_id')
            ->get()
            ->keyBy('hero_id');

        // 4. Calculate the average across the team's draft using the fallback system
        $totalWinrateSum = 0;

        foreach ($heroIds as $heroId) {
            $tStat = $tournamentStats->get($heroId);
            
            // Tier 1: Tournament Data
            if ($tStat && $tStat->total_picks > 0) {
                $winRate = ($tStat->wins / $tStat->total_picks) * 100;
            } else {
                // Tier 2: All-Time History Fallback
                $aStat = $allTimeStats->get($heroId);
                
                if ($aStat && $aStat->total_picks > 0) {
                    $winRate = ($aStat->wins / $aStat->total_picks) * 100;
                } else {
                    // Tier 3: Neutral Baseline
                    $winRate = 50.0; 
                }
            }

            $totalWinrateSum += $winRate;
        }

        return round($totalWinrateSum / count($heroIds), 1);
    }
}