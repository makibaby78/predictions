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

    public function winnerTeam()
    {
        return $this->belongsTo(Team::class, 'winner_id');
    }

    public function getIsWinAttribute(): ?bool
    {
        if (!$this->match?->winner_id) {
            return null;
        }

        return $this->team_id === $this->match->winner_id;
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
