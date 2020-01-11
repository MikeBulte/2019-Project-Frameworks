<?php

namespace App\Http\Controllers;

use App\Countdown;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('timer');
        $this->middleware('auth:api')->only('timer');
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
        $players = config('roles.models.role')::where('slug', 'user')->first()->users;
        $judges = config('roles.models.role')::where('slug', 'jury')->first()->users;
        $admins = config('roles.models.role')::where('slug', 'admin')->first()->users;
        $timer =  Countdown::find(1);

        return view('dashboard.dashboard', compact('players', 'judges', 'admins', 'timer'));
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


    public function timer(Request $request){

        if ($request->post('action') == 'start'):
                    $seconds = $request->get('seconds');
                    $timer = Countdown::find(1);
                    $timer->seconds=$request->get('seconds');


                    $timer->save();;
            print('Wil je de ronde starten?');
            return;
        endif;

        print('ronde is niet gestart');

    }
}
