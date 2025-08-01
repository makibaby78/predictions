<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    protected $table = 'matches'; // explicitly define table name since model name is plural

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

    public function team1()
    {
        return $this->belongsTo(Team::class, 'team1_id');
    }

    public function team2()
    {
        return $this->belongsTo(Team::class, 'team2_id');
    }

    public function winner()
    {
        return $this->belongsTo(Team::class, 'winner_id');
    }
}
