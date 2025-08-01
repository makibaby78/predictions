<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    protected $table = 'matches';

    protected $fillable = [
        'series_id',
        'team1_id',
        'team2_id',
        'scheduled_at',
        'winner_id',
        'match_number',
    ];

    public function series()
    {
        return $this->belongsTo(Series::class);
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
