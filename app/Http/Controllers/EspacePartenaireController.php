<?php
namespace App\Http\Controllers;

use App\Notifications\NewProjetPostNotification;
use App\Projet;
use App\ProjetNouvelle;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class EspacePartenaireController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->middleware(['auth','clearance']);
    }

    public function index()
    {
        $projets = Projet::orderby('id', 'desc')->paginate(10); 
        return view('espace_partenaire.index',compact('projets'));
    }

    public function categorie($categorie_name)
    {
        $projets = Projet::all()->filter(function($projet) use ($categorie_name)
        {
            return $projet->categorie == $categorie_name;
        }); 

        return view('espace_partenaire.index',compact('projets'));
    }

    public function fav_projets()
    {
        $user = Auth::user();
        $projets = $user->favorites(Projet::class)->get();
        return view('espace_partenaire.index',compact('projets'));
    }

    public function chat()
    {
        $user = Auth::user();
        $projets = $user->favorites(Projet::class)->get();
        return view('espace_partenaire.chat',compact('projets'));
    }

    public function myaccount()
    {
        $user = Auth::user();
        return view('espace_partenaire.edit_account',compact('user'));
    }

    public function update_myaccount($id,Request $request)
    {
    	$user = User::updateOrCreate(['id'=>$id],$request->all());
    	return redirect()->route('all_projet_partenaire')->with('flash_message','Account successfully updated');
    }
}