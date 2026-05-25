<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Player;
use App\Models\Game;

class GamePlayers extends Component
{
    public $game;
    public $search = '';

    public function mount(Game $game)
    {
        $this->game = $game;
    }

    public function toggleActive($playerId)
    {
        $player = Player::findOrFail($playerId);

        $player->is_active = !$player->is_active;
        $player->save();
    }

    public function render()
    {
        $players = Player::where('game_id', $this->game->id)
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('id', $this->search);
                });
            })
            ->orderBy('name')
            ->get();

        return view('livewire.game-players', [
            'players' => $players,
        ]);
    }
}
