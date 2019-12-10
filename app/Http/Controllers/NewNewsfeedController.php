<?php

namespace App\Http\Controllers;

use App\Http\Requests\Newsfeeds;
use App\Newsfeed;
use Illuminate\Http\Request;

class NewNewsfeedController extends Controller
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
        $newsfeeds = Newsfeed::all();
        return view('dashboard.newsfeed', compact('newsfeeds'));
    }

    public function store (Newsfeeds $request)
    {

        $data = $request;
        $bli = new Newsfeed();
        $bli->title = $request->title;
        $bli->article = $request->article;
        $bli->image = $request->image;

        $bli->save();

        return redirect()->back();
    }

    public function update(Newsfeeds $request, Newsfeed $news)
    {
        $news->title = $request->title;
        $news->article = $request->article;
        $news->image = $request->image;

        $news->save();

        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {
        Newsfeed::find($id)->delete();
        return redirect()->back();
    }
}

