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

        return view('pages.leaderboard', compact('scores'));
    }

    public function findUser($id)
    {
        return User::all()->where('id', $id);
    }
}
