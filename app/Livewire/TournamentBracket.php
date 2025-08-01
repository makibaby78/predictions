<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Series;
use App\Models\Tournament;
use App\Models\Team;

class TournamentBracket extends Component
{
    public Tournament $tournament;

    public $editingSeries = null;
    public $isCreating = false;

    public $team1_id;
    public $team2_id;
    public $winner_id;
    public $round;
    public $bracket;
    public $group;
    public $stage;
    public $tournament_id;

    public function mount(Tournament $tournament)
    {
        $this->tournament = $tournament;
        $this->tournament_id = $tournament->id;
    }

    public function getSeriesProperty()
    {
        return Series::with(['teamA', 'teamB', 'winner'])
            ->where('tournament_id', $this->tournament->id)
            ->orderBy('stage')
            ->orderBy('group')
            ->orderBy('bracket')
            ->orderBy('round')
            ->get();
    }

    public function getTeamsProperty()
    {
        return Team::where('game_id', $this->tournament->game_id)->orderBy('name')->get();
    }

    public function editSeries($seriesId)
    {
        $series = Series::findOrFail($seriesId);

        $this->editingSeries = $series->id;
        $this->team1_id = $series->team1_id;
        $this->team2_id = $series->team2_id;
        $this->winner_id = $series->winner_id;
        $this->round = $series->round;
        $this->bracket = $series->bracket;
        $this->group = $series->group;
        $this->stage = $series->stage;
    }

    public function cancelEdit()
    {
        $this->reset([
            'editingSeries', 'team1_id', 'team2_id', 'winner_id',
            'round', 'bracket', 'group', 'stage',
        ]);
    }

    public function updateSeries()
    {
        $series = Series::findOrFail($this->editingSeries);

        $series->update([
            'team1_id' => $this->team1_id,
            'team2_id' => $this->team2_id,
            'winner_id' => $this->winner_id,
            'round' => $this->round,
            'bracket' => $this->bracket,
            'group' => $this->group,
            'stage' => $this->stage,
        ]);

        $this->cancelEdit();

        session()->flash('success', 'Series updated successfully.');
    }

    public function deleteSeries()
    {
        if ($this->editingSeries) {
            $series = Series::find($this->editingSeries);
            if ($series) {
                $series->delete();
                $this->cancelEdit();
                session()->flash('message', 'Series deleted successfully.');
            }
        }
    }

    public function createSeries()
    {
        Series::create([
            'tournament_id' => $this->tournament_id,
            'team1_id' => $this->team1_id,
            'team2_id' => $this->team2_id,
            'round' => $this->round,
            'bracket' => $this->bracket,
            'group' => $this->group,
            'stage' => $this->stage,
            'winner_id' => $this->winner_id,
        ]);

        $this->reset(['isCreating', 'team1_id', 'team2_id', 'round', 'bracket', 'group', 'stage', 'winner_id']);

        session()->flash('message', 'Series created successfully.');
    }

    public function render()
    {
        return view('livewire.tournament-bracket', [
            'teams' => $this->teams,
            'Series' => $this->Series,
        ]);
    }
}
