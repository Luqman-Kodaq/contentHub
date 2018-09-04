<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaraFlash;
use Laracasts;

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
        LaraFlash::add('Successfully Saved Post');
        flash('Welcome to my Blog!!!');
        return view('home');
    }
}
