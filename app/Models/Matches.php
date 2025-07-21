<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    protected $table = 'matches';

    protected $fillable = [
        'tournament_id',
        'team_a_id',
        'team_b_id',
        'team_a_score',
        'team_b_score',
    ];

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function teamA()
    {
        return $this->belongsTo(Team::class, 'team_a_id');
    }

    public function teamB()
    {
        return $this->belongsTo(Team::class, 'team_b_id');
    }

    public function winner() 
    { 
        return $this->belongsTo(Team::class, 'winner_id'); 
    }
}
