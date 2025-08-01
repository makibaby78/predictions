<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use function App\Helpers\getTeamWinRate;

class Team extends Model
{

    protected $fillable = ['name', 'country', 'game_id'];
    
    public function tournaments()
    {
        return $this->belongsToMany(Tournament::class);
    }

    public function winRate($tournamentId = null)
    {
        $rateData = getTeamWinRate($this->id, $tournamentId);
    
        return number_format($rateData['winrate'], 2);
    }

    public function winRateData($tournamentId = null)
    {
        return getTeamWinRate($this->id, $tournamentId);
    }

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function players()
    {
        return $this->belongsToMany(Player::class, 'player_team')
            ->withPivot(['joined_at', 'left_at'])
            ->withTimestamps();
    }    
}
