<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Team;
use App\Models\Game;
use App\Models\Series;

class GameTeams extends Component
{
    public $game;
    public $teams;
    public $name;
    public $editingTeam = null;

    protected $rules = [
        'name' => 'required|string|max:255',
    ];

    public function mount(Game $game)
    {
        $this->game = $game;
        $this->loadTeams();
    }

    public function loadTeams()
    {
        $teams = Team::where('game_id', $this->game->id)->get();

        $this->teams = $teams->map(function ($team) {
            $total = Series::where(function ($q) use ($team) {
                $q->where('team1_id', $team->id)->orWhere('team2_id', $team->id);
            })->whereNotNull('winner_id')->count();

            $wins = Series::where('winner_id', $team->id)->count();

            $team->winrate = $total > 0 ? round(($wins / $total) * 100, 2) : 0;

            return $team;
        })->sortByDesc('winrate')->values();
    }

    public function create()
    {
        $this->validate(['name' => 'required|string|max:255']);

        Team::create([
            'name' => $this->name,
            'game_id' => $this->game->id,
        ]);

        $this->name = '';
        $this->loadTeams();
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        $this->editingTeam = $team;
        $this->name = $team->name;
    }

    public function update()
    {
        $this->validate(['name' => 'required|string|max:255']);

        $this->editingTeam->update(['name' => $this->name]);

        $this->editingTeam = null;
        $this->name = '';
        $this->loadTeams();
    }

    public function delete($id)
    {
        Team::findOrFail($id)->delete();
        $this->loadTeams();
    }

    public function cancelEdit()
    {
        $this->editingTeam = null;
        $this->name = '';
    }

    public function getTeamsProperty()
    {
        return Team::all()
            ->map(function ($team) {
                $team->calculated_winrate = getTeamWinRate($team->id)['winrate'];
                return $team;
            })
            ->sortByDesc('calculated_winrate')
            ->values();
    }

    public function render()
    {
        return view('livewire.game-teams');
    }
}
