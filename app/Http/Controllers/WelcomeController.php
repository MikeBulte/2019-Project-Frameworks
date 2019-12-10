<?php

namespace App\Http\Controllers;

use App\Newsfeed;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $newsfeeds = Newsfeed::all()->take(3);
        //splits $newsfeed in 3 different variables
        list($first, $second, $third) = $newsfeeds;
        return view('pages.welcome', compact('first', 'second', 'third'));
    }
}
