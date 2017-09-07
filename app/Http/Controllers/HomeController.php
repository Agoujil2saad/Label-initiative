<?php

namespace App\Http\Controllers;

use App\Partenaire;
use App\Projet;

class HomeController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
        $partenaires = Partenaire::orderby('id', 'desc')->paginate(5);
        $projets = Projet::orderby('id','desc')->paginate(3);
        return view('home',compact('partenaires','projets'));
    }
}
