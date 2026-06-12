<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

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

    function getHeroWinRate(int $heroId, $playerId = null, $tournamentId = null, $enemyHeroId = null)
    {
        //get all matches involving this hero
        $query = DB::table('match_hero_picks')
            ->join('matches', 'matches.id', '=', 'match_hero_picks.match_id')
            ->where('match_hero_picks.hero_id', $heroId);

        //filter with player
        if ($playerId) {
            $query->where('match_hero_picks.player_id', $playerId);
        }

        //filter with player
        if ($tournamentId) {
            $query->where('matches.tournament_id', $tournamentId);
        }

        // enemy hero filter (IMPORTANT PART)
        if ($enemyHeroId) {
            $query->whereExists(function ($q) use ($enemyHeroId) {
                $q->select(DB::raw(1))
                    ->from('match_hero_picks as enemy_picks')
                    ->whereColumn('enemy_picks.match_id', 'match_hero_picks.match_id')
                    ->whereColumn('enemy_picks.team_id', '!=', 'match_hero_picks.team_id')
                    ->where('enemy_picks.hero_id', $enemyHeroId);
            });
        }

        $stats = $query->select(
                DB::raw('COUNT(*) as total_picks'),
                DB::raw('SUM(CASE WHEN match_hero_picks.team_id = matches.winner_id THEN 1 ELSE 0 END) as wins')
            )->first();

        $totalPicks = (int) $stats->total_picks;
        $wins = (int) $stats->wins;

        return [
            'hero_id'     => $heroId,
            'total_picks' => $totalPicks,
            'wins'        => $wins,
            'win_rate'    => $totalPicks > 0 ? round(($wins / $totalPicks) * 100, 2) : null,
            'has_data'    => $totalPicks > 0,
        ];
    }
}
