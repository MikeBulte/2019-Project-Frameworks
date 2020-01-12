<?php

namespace App\Http\Controllers;

use App\GameTable;
use App\Round;
use App\Score;
use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
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
     * @param \Illuminate\Http\Request $request
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
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    /**
     * Arrange the starting round.
     * @param Round $round
     * @return Factory|View
     */
    public function arrangeStartingRound(Round $round)
    {
        $players = config('roles.models.role')::where('slug', 'user')->cursor()->first()->users;
        $playersCount = count($players);
        $modulo = $playersCount % 4;

        // Modulo 0
        if ($modulo == 0):
            $numOfTables = $playersCount / 4;
            $tableNum = 1;

            while ($numOfTables != 0) {
                $gameTable = new GameTable;
                $gameTable->name = "Tafel " . $tableNum;
                $gameTable->save();

                $i = 0;

                while ($i != 4) {
                    foreach ($players as $key => $player) {
                        $scoreRow = new Score;
                        $scoreRow->game_table_id = $gameTable->id;
                        $scoreRow->round_id = $round->id;
                        $scoreRow->user_id = $player->id;
                        $scoreRow->save();

                        $i++;

                        unset($players[$key]);

                        if ($i == 4)
                            break;
                    }
                }
                $tableNum++;
                $numOfTables--;

                if ($numOfTables == 0) {
                    break;
                }
            }

        // Modulo 1
        elseif ($modulo == 1):
            $numOfTables = (($playersCount - 9) / 4) + 3;
            $tableNum = 1;

            while ($numOfTables != 0) {
                $gameTable = new GameTable;
                $gameTable->name = "Tafel " . $tableNum;
                $gameTable->save();

                if ($numOfTables < 4 && $numOfTables > 0):
                    $j = 0;
                    while ($j != 3) {
                        foreach ($players as $key => $player) {
                            $scoreRow = new Score;
                            $scoreRow->game_table_id = $gameTable->id;
                            $scoreRow->round_id = $round->id;
                            $scoreRow->user_id = $player->id;
                            $scoreRow->save();

                            $j++;

                            unset($players[$key]);

                            if ($j == 3)
                                break;

                        }
                    }
                    $tableNum++;
                elseif ($numOfTables == 0):
                    break;
                else:
                    $i = 0;

                    while ($i != 4) {
                        foreach ($players as $key => $player) {
                            $scoreRow = new Score;
                            $scoreRow->game_table_id = $gameTable->id;
                            $scoreRow->round_id = $round->id;
                            $scoreRow->user_id = $player->id;
                            $scoreRow->save();

                            $i++;

                            unset($players[$key]);

                            if ($i == 4)
                                break;
                        }
                    }
                    $tableNum++;
                endif;
                $numOfTables--;
            }

        // Modulo 2
        elseif ($modulo == 2):
            $numOfTables = (($playersCount - 6) / 4) + 2;
            $tableNum = 1;

            while ($numOfTables != 0) {
                $gameTable = new GameTable;
                $gameTable->name = "Tafel " . $tableNum;
                $gameTable->save();

                if ($numOfTables < 3 && $numOfTables > 0):
                    $j = 0;
                    while ($j != 3) {
                        foreach ($players as $key => $player) {
                            $scoreRow = new Score;
                            $scoreRow->game_table_id = $gameTable->id;
                            $scoreRow->round_id = $round->id;
                            $scoreRow->user_id = $player->id;
                            $scoreRow->save();

                            $j++;

                            unset($players[$key]);

                            if ($j == 3)
                                break;
                        }
                    }
                    $tableNum++;
                elseif ($numOfTables == 0):
                    break;
                else:
                    $i = 0;

                    while ($i != 4) {
                        foreach ($players as $key => $player) {
                            $scoreRow = new Score;
                            $scoreRow->game_table_id = $gameTable->id;
                            $scoreRow->round_id = $round->id;
                            $scoreRow->user_id = $player->id;
                            $scoreRow->save();

                            $i++;

                            unset($players[$key]);

                            if ($i == 4)
                                break;
                        }
                    }
                    $tableNum++;
                endif;
                $numOfTables--;
            }

        // Modulo 3
        elseif ($modulo == 3):
            $numOfTables = (($playersCount - 3) / 4) + 1;
            $tableNum = 1;

            while ($numOfTables != 0) {
                $gameTable = new GameTable;
                $gameTable->name = "Tafel " . $tableNum;
                $gameTable->save();

                if ($numOfTables < 2 && $numOfTables > 0):
                    $j = 0;
                    while ($j != 3) {
                        foreach ($players as $key => $player) {
                            $scoreRow = new Score;
                            $scoreRow->game_table_id = $gameTable->id;
                            $scoreRow->round_id = $round->id;
                            $scoreRow->user_id = $player->id;
                            $scoreRow->save();

                            $j++;

                            unset($players[$key]);

                            if ($j == 3)
                                break;
                        }
                    }
                    $tableNum++;
                elseif ($numOfTables == 0):
                    break;
                else:
                    $i = 0;

                    while ($i != 4) {
                        foreach ($players as $key => $player) {
                            $scoreRow = new Score;
                            $scoreRow->game_table_id = $gameTable->id;
                            $scoreRow->round_id = $round->id;
                            $scoreRow->user_id = $player->id;
                            $scoreRow->save();

                            $i++;

                            unset($players[$key]);

                            if ($i == 4)
                                break;
                        }
                    }
                    $tableNum++;
                endif;
                $numOfTables--;
            }
        endif;

        return redirect()->back();
    }

    /**
     * Arrange the second and third rounds.
     * @param Round $round
     * @return RedirectResponse
     */
    public function arrangeRound(Round $round)
    {
        if ($round->id != 1)
            $players = Score::where('round_id', ($round->id - 1))->orderBy('weight', 'desc')->get();
        else
            $players = Score::where('round_id', 1)->orderBy('weight', 'desc')->get();

        $playersCount = count($players);
        $modulo = $playersCount % 4;

        // Modulo 0
        if ($modulo == 0):
            $numOfTables = $playersCount / 4;
            $tableNum = 1;

            while ($numOfTables != 0) {
                $gameTable = new GameTable;
                $gameTable->name = "Tafel " . $tableNum;
                $gameTable->save();

                $i = 0;

                while ($i != 4) {
                    foreach ($players as $key => $player) {
                        $user = User::find($player->user_id);
                        if ($user->hasRole('user')):
                            $scoreRow = new Score;
                            $scoreRow->game_table_id = $gameTable->id;
                            $scoreRow->round_id = $round->id;
                            $scoreRow->user_id = $player->user_id;
                            $scoreRow->save();

                            $i++;

                            unset($players[$key]);

                            if ($i == 4)
                                break;
                        endif;
                    }
                }
                $tableNum++;
                $numOfTables--;

                if ($numOfTables == 0) {
                    break;
                }
            }

        // Modulo 1
        elseif ($modulo == 1):
            $numOfTables = (($playersCount - 9) / 4) + 3;
            $tableNum = 1;

            while ($numOfTables != 0) {
                $gameTable = new GameTable;
                $gameTable->name = "Tafel " . $tableNum;
                $gameTable->save();

                if ($numOfTables < 4 && $numOfTables > 0):
                    $j = 0;
                    while ($j != 3) {
                        foreach ($players as $key => $player) {
                            $user = User::find($player->user_id);
                            if ($user->hasRole('user')):
                                $scoreRow = new Score;
                                $scoreRow->game_table_id = $gameTable->id;
                                $scoreRow->round_id = $round->id;
                                $scoreRow->user_id = $player->user_id;
                                $scoreRow->save();

                                $j++;

                                unset($players[$key]);

                                if ($j == 3)
                                    break;
                            endif;
                        }
                    }
                    $tableNum++;
                elseif ($numOfTables == 0):
                    break;
                else:
                    $i = 0;

                    while ($i != 4) {
                        foreach ($players as $key => $player) {
                            $user = User::find($player->user_id);
                            if ($user->hasRole('user')):
                                $scoreRow = new Score;
                                $scoreRow->game_table_id = $gameTable->id;
                                $scoreRow->round_id = $round->id;
                                $scoreRow->user_id = $player->user_id;
                                $scoreRow->save();

                                $i++;

                                unset($players[$key]);

                                if ($i == 4)
                                    break;
                            endif;
                        }
                    }
                    $tableNum++;
                endif;
                $numOfTables--;
            }

        // Modulo 2
        elseif ($modulo == 2):
            $numOfTables = (($playersCount - 6) / 4) + 2;
            $tableNum = 1;

            while ($numOfTables != 0) {
                $gameTable = new GameTable;
                $gameTable->name = "Tafel " . $tableNum;
                $gameTable->save();

                if ($numOfTables < 3 && $numOfTables > 0):
                    $j = 0;
                    while ($j != 3) {
                        foreach ($players as $key => $player) {
                            $user = User::find($player->user_id);
                            if ($user->hasRole('user')):
                                $scoreRow = new Score;
                                $scoreRow->game_table_id = $gameTable->id;
                                $scoreRow->round_id = $round->id;
                                $scoreRow->user_id = $player->user_id;
                                $scoreRow->save();

                                $j++;

                                unset($players[$key]);

                                if ($j == 3)
                                    break;
                            endif;
                        }
                    }
                    $tableNum++;
                elseif ($numOfTables == 0):
                    break;
                else:
                    $i = 0;

                    while ($i != 4) {
                        foreach ($players as $key => $player) {
                            $user = User::find($player->user_id);
                            if ($user->hasRole('user')):
                                $scoreRow = new Score;
                                $scoreRow->game_table_id = $gameTable->id;
                                $scoreRow->round_id = $round->id;
                                $scoreRow->user_id = $player->user_id;
                                $scoreRow->save();

                                $i++;

                                unset($players[$key]);

                                if ($i == 4)
                                    break;
                            endif;
                        }
                    }
                    $tableNum++;
                endif;
                $numOfTables--;
            }

        // Modulo 3
        elseif ($modulo == 3):
            $numOfTables = (($playersCount - 3) / 4) + 1;
            $tableNum = 1;

            while ($numOfTables != 0) {
                $gameTable = new GameTable;
                $gameTable->name = "Tafel " . $tableNum;
                $gameTable->save();

                if ($numOfTables < 2 && $numOfTables > 0):
                    $j = 0;
                    while ($j != 3) {
                        foreach ($players as $key => $player) {
                            $user = User::find($player->user_id);
                            if ($user->hasRole('user')):
                                $scoreRow = new Score;
                                $scoreRow->game_table_id = $gameTable->id;
                                $scoreRow->round_id = $round->id;
                                $scoreRow->user_id = $player->user_id;
                                $scoreRow->save();

                                $j++;

                                unset($players[$key]);

                                if ($j == 3)
                                    break;
                            endif;
                        }
                    }
                    $tableNum++;
                elseif ($numOfTables == 0):
                    break;
                else:
                    $i = 0;

                    while ($i != 4) {
                        foreach ($players as $key => $player) {
                            $user = User::find($player->user_id);
                            if ($user->hasRole('user')):
                                $scoreRow = new Score;
                                $scoreRow->game_table_id = $gameTable->id;
                                $scoreRow->round_id = $round->id;
                                $scoreRow->user_id = $player->user_id;
                                $scoreRow->save();

                                $i++;

                                unset($players[$key]);

                                if ($i == 4)
                                    break;
                            endif;
                        }
                    }
                    $tableNum++;
                endif;
                $numOfTables--;
            }
        endif;

        return redirect()->back();
    }

    /**
     * Arrange the bracket rounds (eliminations).
     */
    public function arrangeBracketRound()
    {

    }

    /**
     * Delete all the tables from a certain round in the database.
     *
     * @param Round $round
     * @return RedirectResponse
     */
    public function deleteAllTables(Round $round)
    {
        $tables = Score::where('round_id', $round->id)->get();
        foreach ($tables as $table):
            $table->delete();
        endforeach;
        return redirect()->back();
    }
}

