<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['team_id', 'name', 'position', 'country'];
    
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

}
