<?php
namespace App\Http\Controllers;
use App\Projet;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
class DeposerProjetController extends Controller
{

	 public function __construct()
    {
        $this->middleware('guest');
    }

public function index()
{
	return(view('deposer_projet.index'));
}
public function store(Request $request)
{
$this->validate($request, [
"address"=>'required',
"categorie"=>'required',
"checkPass"=>'required',
"email"=>'required',
"fonction"=>'required',
"pass"=>'required',
"region"=>'required',
"tel"=>'required',
"name"=>'required',
"montant_projet"=>'required',
"description_projet"=>'required',
"categorie_projet"=>'required',
"titre_projet"=>'required',
]);

$user = User::create([
	'name' => request('name'),
	'email' => request('email'),
	'password' => request('pass'),	
	'region' => request('region'),
	'address' => request('address'),
	'categorie' => request('categorie'),
	'fonction' => request('fonction'),
    'tel' => request('tel'),
]);

//Retreive the name, email and password fields .....
$role = 2;
//Retreive all roles
//Checking if a role was selected
if (isset($role)) {
$role_r = Role::where('id', '=', $role)->firstOrFail();
$user->assignRole($role_r);
//Assigning role to user
}
//login the user
Auth::guard()->login($user);
$projet = Projet::create([
'user_id'=> auth()->id(),
'title' => request('titre_projet'),
'description' => request('description_projet'),
'montant_estime' =>  request('montant_projet'),
'categorie' =>  request('categorie_projet')
]);
// establish the relation one to one beteween (projet-user)
auth()->projet()->save($projet);

//redirect to the projetcs pages
return ['redirect' => route('projet.index')];
}
}