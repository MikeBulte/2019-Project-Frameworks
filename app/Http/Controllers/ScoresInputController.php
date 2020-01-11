<?php

namespace App\Http\Controllers;

use App\GameTable;
use App\Http\Requests\ScoreInputRequest;
use App\Round;
use App\Score;
use App\User;
use Illuminate\Http\Request;

class ScoresInputController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('level:3');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $rounds = Round::all();
        $scores = Score::all();

        return view('dashboard.scoreInput', compact('scores', 'rounds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * For inputting scores we'll be updating them as the scores already exist to arrange tables.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ScoreInputRequest $request, $id)
    {
        // Scores contains the scores that need to be updated.
        $scores = Score::where('game_table_id', $id)->get();


        foreach ($scores as $key => $score) {
//            @dd($request->score1);
            if ($key === 0) {
                $score->amount = $request->score0;
            } elseif ($key === 1) {
                $score->amount = $request->score1;
            } elseif ($key === 2) {
                $score->amount = $request->score2;
            } else {
                $score->amount = $request->score3;
            }
            $score->save();
        }

        return redirect()->route('scoreinput.index');

//        @dd($request->score);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
