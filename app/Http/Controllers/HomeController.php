<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    function listenAudio($fileName)
    {
//        $file = Storage::disk('local')->get($fileName);
        $file = asset("storage/".$fileName);
        return (new Response($file, 200))
              ->header('Content-Type', 'audio/mpeg');
    }

}
