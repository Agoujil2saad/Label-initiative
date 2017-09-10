<?php

namespace App\Http\Controllers;

use App\Jobs\ChangeLocale;
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

    public function language( $lang,
		ChangeLocale $changeLocale)
	{		
		$lang = in_array($lang, config('app.languages')) ? $lang : config('app.fallback_locale');
		$changeLocale->lang = $lang;
		$this->dispatch($changeLocale);
		return redirect()->back();
	}
}
