<?php

namespace App\Http\Controllers;

use App\GameTable;
use App\Round;
use App\User;
use Illuminate\Http\Request;
use function Psy\debug;

class TableArrangementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('level:3');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rounds = Round::all();
        $tables = GameTable::all();

        return view('dashboard.tableArrangement', compact('rounds', 'tables'));
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
    public function store(TableArrangementRequest $request)
    {

        $data = $request->validated();

        return redirect()->route('tablearrangement.index');
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


    /**
     * Arrange the starting round.
     */
    public function arrangeStartingRound()
    {
        $players = config('roles.models.role')::where('slug', 'user')->cursor()->first()->users;
        dd($players[1]->roles);
    }
    /**
     * Arrange the second and third rounds.
     */
    public function arrangeRound()
    {

    }

    /**
     * Arrange the bracket rounds (eliminations).
     */
    public function arrangeBracketRound()
    {

    }
}

