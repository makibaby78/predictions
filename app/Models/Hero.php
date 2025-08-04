<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = ['game_id', 'name', 'role', 'image_url'];

    public function game()
    {
        return $this->belongsTo(Game::class);
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
