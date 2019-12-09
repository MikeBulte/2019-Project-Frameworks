<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersDashboardRequest;
use App\Score;
use App\User;
use App\UsersDashboard;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('usersDashboard.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param UsersDashboard $usersDashboard
     * @return void
     */
    public function show(UsersDashboard $usersDashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $usersDashboard
     * @return Response
     */
    public function edit(User $usersDashboard)
    {
        $user = Auth::user();
        return view('usersDashboard.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User $usersDashboard
     * @return Response
     */
    public function update(UsersDashboardRequest $request, User $usersDashboard)
    {
        $user = Auth::user();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        if(!empty($request->password)):
            $user->password = Hash::make($request->password);
        endif;

        if ($user->save()):
            session()->flash('msg', 'Profielinstellingen succesvol gewijzigd');
        else:
            session()->flash('alert', 'Fout tijdens het wijzigen van de profielinstellingen');
        endif;

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param UsersDashboard $usersDashboard
     * @return void
     * @throws Exception
     */
    public function destroy($usersDashboard)
    {
        $user = User::find($usersDashboard);
        $user->delete();
        return redirect()->route('root');
    }

    public function leaderboard()
    {
        $scores = Score::paginate(5);

        return view('usersDashboard.leaderboard', compact('scores'));
    }
}
