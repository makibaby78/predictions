<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['name', 'position', 'country'];
    
    public function teams()
    {
        return $this->belongsToMany(Team::class)
            ->withPivot(['joined_at', 'left_at'])
            ->withTimestamps();
    }

    public function currentTeam()
    {
        return $this->teams()->wherePivot('left_at', null)->first();
    }

    public function picks()
    {
        return $this->hasMany(MatchHeroPick::class);
    }

    public function winrate()
    {
        $picks = $this->picks()->with('match')->get();
    
        $totalPicks = $picks->count();
        $wins = 0;
    
        foreach ($picks as $pick) {
            if ($pick->match && $pick->match->winner_id === $pick->team_id) {
                $wins++;
            }
        }
    
        return $totalPicks > 0 ? round(($wins / $totalPicks) * 100, 1) : null;
    }   

}
