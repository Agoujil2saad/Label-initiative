<?php

namespace App\Http\Controllers;

use App\Partenaire;
use App\Projet;
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

        $partenaires = Partenaire::orderby('id', 'desc')->paginate(5);
        $projets = Projet::orderby('id', 'desc')->paginate(3);
        return view('home',compact('partenaires','projets'));
    }
}
