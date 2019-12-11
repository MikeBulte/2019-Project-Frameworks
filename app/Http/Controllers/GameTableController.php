<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameTableController extends Controller
{
    public function index()
    {
        return view('dashboard.tableArrangement');
    }
}
