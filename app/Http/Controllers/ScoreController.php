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
        foreach ($scores as $score) {
            var_dump($score->user_id);
        }

        return view('pages.leaderboard', compact('scores'));
    }
}
