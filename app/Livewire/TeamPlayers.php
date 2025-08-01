<?php

namespace App\Livewire;

use App\Models\Player;
use App\Models\Team;
use Livewire\Component;
use Illuminate\Support\Carbon;

class TeamPlayers extends Component
{
    public Team $team;
    public $playerIdToAdd = '';

    public function mount(Team $team)
    {
        $this->team = $team;
    }

    public function getActivePlayersProperty()
    {
        return $this->team->players()->wherePivotNull('left_at')->get();
    }

    public function getLeftPlayersProperty()
    {
        return $this->team->players()->wherePivotNotNull('left_at')->get();
    }

    public function addPlayerToTeam()
    {
        if (!$this->playerIdToAdd) return;

        $alreadyExists = $this->team->players()
            ->where('players.id', $this->playerIdToAdd)
            ->wherePivotNull('left_at')
            ->exists();

        if (!$alreadyExists) {
            $this->team->players()->attach($this->playerIdToAdd, [
                'joined_at' => now(),
            ]);
        }

        $this->playerIdToAdd = '';
    }

    public function markAsLeft($playerId)
    {
        $this->team->players()->updateExistingPivot($playerId, [
            'left_at' => now(),
        ]);
    }

    public function render()
    {
        $availablePlayers = Player::whereHas('teams', function ($q) {
            $q->where('game_id', $this->team->game_id);
        })
        ->whereDoesntHave('teams', function ($q) {
            $q->where('team_id', $this->team->id)->whereNull('left_at');
        })
        ->get();

        return view('livewire.team-players', [
            'availablePlayers' => $availablePlayers,
            'activePlayers' => $this->activePlayers,
            'leftPlayers' => $this->leftPlayers,
        ]);
    }
}
