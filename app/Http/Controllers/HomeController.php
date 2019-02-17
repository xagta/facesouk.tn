<?php

namespace App\Http\Controllers;

use App\Entreprises;
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
       /* $this->middleware('auth'); */
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $entreprises= Entreprises::all();

        return view('home',['entreprises'=>$entreprises]) ;
    }
}
