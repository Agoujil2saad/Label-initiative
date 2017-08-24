<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Projet;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
class EspacePorteurProjetController extends Controller
{
    public function index()
    {
    	$projets= Projet::orderby('id','desc')->paginate(5);
    	return view('espace_porteur.index',compact('projets'));
    }

    public function edit()
    {
    	$user = User::findOrFail(auth()->id());
    	 $projet = $user->projet;
         // $projet = Projet::findOrFail($id); 
         //Find post of id = $id
    		return view('espace_porteur.edit_projet_espace',compact('projet'));
    }


}
