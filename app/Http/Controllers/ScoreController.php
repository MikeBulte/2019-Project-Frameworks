<?php

namespace App\Http\Controllers;

use App\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function index()
    {
        $scores = Score::all();
        $combinedScores = $this->getCombinedScores($scores);

        return view('pages.leaderboard', compact('combinedScores'));
    }

    public function getCombinedScores($scores)
    {
        $combinedIds     = [];
        $combinedResults = [];
        $first = true;

        // Check's if user_id isn't already in array, if so. Combine scores and rounds together to show total score.
        foreach ($scores as $key => $score) {
            if ($first === true) {
                $combinedResults[$key]['id']         = $score->rounduser->user_id;
                $combinedResults[$key]['first_name'] = $score->user->first_name;
                $combinedResults[$key]['prefix']     = (!is_null($score->user->prefix) ? $score->user->prefix : '');
                $combinedResults[$key]['last_name']  = $score->user->last_name;
                $combinedResults[$key]['amount']     = $score->amount;
                $combinedResults[$key]['rounds']     = 1;

                array_push($combinedIds, $score->rounduser->user_id);
                $first = false;
            }
            elseif (!in_array($score->rounduser->user_id, $combinedIds)) {
                $combinedResults[$key]['id']         = $score->rounduser->user_id;
                $combinedResults[$key]['first_name'] = $score->user->first_name;
                $combinedResults[$key]['prefix']     = (!is_null($score->user->prefix) ? $score->user->prefix : '');
                $combinedResults[$key]['last_name']  = $score->user->last_name;
                $combinedResults[$key]['amount']     = $score->amount;
                $combinedResults[$key]['rounds']     = 1;

                array_push($combinedIds, $score->rounduser->user_id);
            } else {
                $id = array_keys($combinedIds, $score->rounduser->user_id);
                $combinedResults[$id[0]]['amount'] += $score->amount;
                $combinedResults[$id[0]]['rounds']++;
            }
        }
        return $combinedResults;
    }
}
