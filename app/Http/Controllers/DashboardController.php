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
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

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

        return view('dashboard.dashboard', compact('players', 'judges', 'admins'));
    }

}
