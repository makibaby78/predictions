<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PredictionService;

class PredictionController extends Controller
{
    public function predict(Request $request, PredictionService $predictor)
    {
        $teamAId = $request->input('team_a_id');
        $teamBId = $request->input('team_b_id');

        $winner = $predictor->predictWinner($teamAId, $teamBId);

        return response()->json(['predicted_winner' => $winner]);
    }
}
