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
}
