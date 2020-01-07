<?php

namespace App\Http\Controllers;

use App\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function index()
    {
        $scores = Score::paginate(20);
        $combinedScores = $this->getCombinedScores($scores);

//        Correct way, fixing later so using old method until more time is available to redo function
//        $scores = Score::orderBy('amount', 'desc')->get();
//        return view('pages.leaderboard', compact('scores'));

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
                $combinedResults[$key]['id']         = $score->user_id;
                $combinedResults[$key]['first_name'] = $score->user->first_name;
                $combinedResults[$key]['prefix']     = (!is_null($score->user->prefix) ? $score->user->prefix : '');
                $combinedResults[$key]['last_name']  = $score->user->last_name;
                $combinedResults[$key]['amount']     = $score->amount;
                $combinedResults[$key]['rounds']     = 1;

                array_push($combinedIds, $score->user_id);
                $first = false;
            }
            elseif (!in_array($score->user_id, $combinedIds)) {
                $combinedResults[$key]['id']         = $score->user_id;
                $combinedResults[$key]['first_name'] = $score->user->first_name;
                $combinedResults[$key]['prefix']     = (!is_null($score->user->prefix) ? $score->user->prefix : '');
                $combinedResults[$key]['last_name']  = $score->user->last_name;
                $combinedResults[$key]['amount']     = $score->amount;
                $combinedResults[$key]['rounds']     = 1;

                array_push($combinedIds, $score->user_id);
            } else {
                $id = array_keys($combinedIds, $score->user_id);
                $combinedResults[$id[0]]['amount'] += $score->amount;
                $combinedResults[$id[0]]['rounds']++;
            }

        }
        /**
         * Copy all results into a new array so we can sort with it to display the highest score first.
         */
        foreach ($combinedResults as $key => $row)
        {
            $results[$key] = $row['amount'];
        }
        array_multisort($results, SORT_DESC, $combinedResults);

        return $combinedResults;
//        asort(array_column($combinedResults, 'amount'), SORT_DESC);
//        dd($combinedResults);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
