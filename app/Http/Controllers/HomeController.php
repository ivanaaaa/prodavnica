<?php

namespace App\Http\Controllers;

use App\Notifikacija;
use Illuminate\Http\Request;

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
        $notifikacii = Notifikacija::all();
        return view('home', compact('notifikacii'));
    }
}
