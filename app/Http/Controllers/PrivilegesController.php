<?php

namespace App\Http\Controllers;

use App\Http\Requests\JudgesRequest;
use App\Http\Requests\PlayersRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PrivilegesController extends Controller
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
        $privileges = config('roles.models.role')::where('slug', 'user')->first()->users;

        return view('dashboard.privileges', compact('privileges'));
    }

    public function store(PlayersRequest $request)
    {
        $data = $request->validated();

        $player = new User();
        $player->first_name = $data['first_name'];
        $player->last_name = $data['last_name'];
        $player->email = $data['email'];
        $player->password = Hash::make($data['password']);

        $player->save();

        return redirect()->route('players.index');
    }

    public function storeJudge(JudgesRequest $request)
    {
        $data = $request->validated();

        $judge = config('roles.models.defaultUser')::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $role = config('roles.models.role')::where('name', '=', 'Jury')->first();  //choose the default role upon user creation.
        $judge->attachRole($role);

        return redirect()->route('judges.index');
    }
}
