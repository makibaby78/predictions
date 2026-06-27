<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

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

    // --- New Accessors Mirroring Component Calculation Logic ---

    protected function team1DraftWinrate(): Attribute
    {
        return Attribute::make(
            // Point to teamA instead of team1
            get: fn () => $this->calculateTeamDraftWinrate($this->series?->teamA?->id)
        );
    }

    /**
     * Get Team 2's combined draft average win rate.
     */
    protected function team2DraftWinrate(): Attribute
    {
        return Attribute::make(
            // Point to teamB instead of team2
            get: fn () => $this->calculateTeamDraftWinrate($this->series?->teamB?->id)
        );
    }
    /**
     * Helper to compute the component-level logic inside the model
     */
    protected function calculateTeamDraftWinrate(?int $teamId): ?float
    {
        if (!$teamId) {
            return null;
        }

        // Filter the pre-loaded or eager-loaded hero picks for this specific team
        $teamPicks = $this->matchHeroPicks->where('team_id', $teamId)->filter(function ($pick) {
            return !is_null($pick->hero_id);
        });

        if ($teamPicks->isEmpty()) {
            return 0.0;
        }

        $heroModel = new Hero();
        $totalWinrateSum = 0;

        foreach ($teamPicks as $pick) {
            // Re-uses your exact logic from the Livewire component 
            $stats = $heroModel->getHeroWinRate((int) $pick->hero_id);
            $totalWinrateSum += $stats['win_rate'] ?? 0.0;
        }

        return round($totalWinrateSum / $teamPicks->count(), 1);
    }
}