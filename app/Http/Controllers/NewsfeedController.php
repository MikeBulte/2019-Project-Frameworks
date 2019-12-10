<?php


namespace App\Http\Controllers;

use App\Newsfeed;
use Illuminate\Http\Request;

class NewsfeedController extends Controller
{

    public function index()
    {
        $newsfeeds = Newsfeed::all();
        return view('pages/newsfeed', compact('newsfeeds'));
    }
}

