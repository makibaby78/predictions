<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    protected $fillable = ['name', 'country', 'game_id'];
    
    public function tournaments()
    {
        return $this->belongsToMany(Tournament::class);
    }

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
