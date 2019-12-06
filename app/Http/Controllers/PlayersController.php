<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlayersRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;

class PlayersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $players = User::paginate(10);

        return view('dashboard.players', compact('players'));
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

    public function show(User $player)
    {
        //
    }

    public function edit(User $player)
    {
        //
    }

    public function update(PlayersRequest $request, User $player)
    {
        $player->first_name = $request->first_name;
        $player->last_name = $request->last_name;
        $player->email = $request->email;
        $player->password = $request->password;

        $player->save();

        return redirect()->route('players.index');
    }

    public function destroy(User $player)
    {
        $player->delete();
        return redirect()->route('players.index');
    }
}
