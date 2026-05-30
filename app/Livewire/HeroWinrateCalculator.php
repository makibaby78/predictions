<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Tournament;
use App\Models\Player;

class HeroWinrateCalculator extends Component
{
    public Tournament $tournament;

    public $heroId = null;
    public $playerId = null;
    public $enemyHeroId = null;
    public $enemyPlayerId = null;

    public $result = null;

    // dropdown data
    public $heroes = [];
    public $players = [];

    public function mount(Tournament $tournament)
    {
        $this->tournament = $tournament;

        $gameId = $tournament->game_id;

        $this->heroes = DB::table('heroes')
            ->where('game_id', $gameId)
            ->select('id', 'name')
            ->orderBy('name')
            ->get();

        $this->players = Player::query()
            ->where('game_id', $gameId)
            ->whereHas('teams.tournaments', function ($query) {
                $query->where('tournaments.id', $this->tournament->id);
            })
            ->select('id', 'name')
            ->orderBy('name')
            ->get();
        }

    public function calculate()
    {
        if (!$this->heroId) {
            $this->result = null;
            return;
        }

        $query = DB::table('match_hero_picks')
            ->join('matches', 'matches.id', '=', 'match_hero_picks.match_id')
            ->where('matches.tournament_id', $this->tournament->id) // FIXED
            ->where('match_hero_picks.hero_id', $this->heroId);

        // Player filter
        if ($this->playerId) {
            $query->where('match_hero_picks.player_id', $this->playerId);
        }

        // Enemy hero filter
        if ($this->enemyHeroId) {
            $query->whereExists(function ($q) {
                $q->select(DB::raw(1))
                    ->from('match_hero_picks as enemy_picks')
                    ->whereColumn('enemy_picks.match_id', 'match_hero_picks.match_id')
                    ->where('enemy_picks.hero_id', $this->enemyHeroId);
            });
        }

        if ($this->enemyPlayerId) {

            $query->whereExists(function ($q) {
                $q->select(DB::raw(1))
                    ->from('match_hero_picks as enemy_picks')
                    ->whereColumn('enemy_picks.match_id', 'match_hero_picks.match_id')
                    ->where('enemy_picks.player_id', $this->enemyPlayerId);
            });

        }

        $totalPicks = (clone $query)->count();

        $wins = (clone $query)
            ->whereColumn('match_hero_picks.team_id', 'matches.winner_id')
            ->count();

        $this->result = [
            'total_picks' => $totalPicks,
            'wins' => $wins,
            'win_rate' => $totalPicks > 0
                ? round(($wins / $totalPicks) * 100, 2)
                : null,
        ];
    }

    public function render()
    {
        return view('livewire.hero-winrate-calculator');
    }
}