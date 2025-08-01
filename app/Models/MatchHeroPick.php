<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatchHeroPick extends Model
{
    protected $fillable = [
        'match_id',
        'team_id',
        'hero_id',
        'player_id',
    ];

    public function match()
    {
        return $this->belongsTo(Matches::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function hero()
    {
        return $this->belongsTo(Hero::class);
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
