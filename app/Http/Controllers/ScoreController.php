<?php

namespace App\Http\Controllers;

use App\Score;
use App\User;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function index()
    {
        $scores = Score::all();

//        $testScore = Score::find(1);
//        var_dump($testScore->user->first_name);
//        die();

        $combinedScores = $this->getCombinedScores($scores);

        return view('pages.leaderboard', compact('combinedScores'));
    }

    public function getCombinedScores($scores)
    {
        $combinedIds = [];
        $combinedResults = [];
        $first = true;

        //TODO: Check if user_id isn't already in array, if so. Combine scores and rounds together to show total score.
        foreach ($scores as $key => $score) {
            if ($first === true) {
                $combinedResults[$key]['id'] = $score->rounduser->user_id;
                $combinedResults[$key]['first_name'] = $score->user->first_name;
                $combinedResults[$key]['last_name'] = $score->user->last_name;
                $combinedResults[$key]['amount'] = $score->amount;

                array_push($combinedIds, $score->rounduser->user_id);
                $first = false;
            }
            elseif (!in_array($score->rounduser->user_id, $combinedIds)) {
                $combinedResults[$key]['id'] = $score->rounduser->user_id;
                $combinedResults[$key]['first_name'] = $score->user->first_name;
                $combinedResults[$key]['last_name'] = $score->user->last_name;
                $combinedResults[$key]['amount'] = $score->amount;

                array_push($combinedIds, $score->rounduser->user_id);
            } else {
                $id = array_keys($combinedIds, $score->rounduser->user_id);
                $combinedResults[$id[0]]['amount'] += $score->amount;
            }
        }
        return $combinedResults;
    }
}
