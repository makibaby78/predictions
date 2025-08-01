<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $fillable = ['game_id', 'name', 'start_date', 'end_date'];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }

    public function series()
    {
        return $this->hasMany(Series::class);
    }
}
