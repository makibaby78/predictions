<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    protected $fillable = ['name'];

    public function tournaments()
    {
        return $this->hasMany(Tournament::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
