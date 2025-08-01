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
}
