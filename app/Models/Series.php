<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $table = 'series';

    protected $fillable = [
        'tournament_id',
        'team1_id',
        'team2_id',
        'winner_id',
        'match_date',
    ];

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function teamA()
    {
        return $this->belongsTo(Team::class, 'team1_id');
    }

    public function teamB()
    {
        return $this->belongsTo(Team::class, 'team2_id');
    }

    public function winner()
    {
        return $this->belongsTo(Team::class, 'winner_id');
    }

    public function matches()
    {
        return $this->hasMany(Matches::class)->orderBy('match_number');
    }
}
