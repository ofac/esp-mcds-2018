<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Auth;

class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::where('user_id', '=', Auth::user()->id)->get();
        return view('home')->with('photos', $photos);
    }
}
