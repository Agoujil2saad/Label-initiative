<?php
namespace App\Http\Controllers;
use App\Partenaire;
use Illuminate\Database\Eloquent\findOrFail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
class PartenaireController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function __construct()
{
// $this->middleware(['auth','clearance'])->except('index','show');
}
public function index() {
$partenaires = Partenaire::orderby('id', 'desc')->paginate(5); //show only 5 items at a time in descending order
return view('partenaires.index', compact('partenaires'));
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('partenaires.create');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$this->validate($request,
['name'=>'required',
'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
]);
//
$logo = $request->file('logo');
$name = $request['name'];
$partenaire= Partenaire::create($request->only('name'));
//

if ($logo) 
{
$input['imagename'] = time().'.'.$logo->getClientOriginalExtension();
$destinationPath = public_path('/images/partners');
$logo->move($destinationPath, $input['imagename']);
$partenaire->logo = time().'.'.$logo->getClientOriginalExtension();
$partenaire->save();
}



//Display a successful message upon save
return redirect()->route('partenaire.index')
->with('flash_message', 'Partenaire,
'. $partenaire->name.' created');
}
/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
$partenaire = Partenaire::findOrFail($id); //Find partenaire of id = $id
return view ('partenaires.show', compact('partenaire'));    }
/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
$partenaire = Partenaire::findOrFail($id);
return view('partenaires.edit', compact('partenaire'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$partenaire = Partenaire::findOrFail($id);

$logo = $request->file('logo');
$name = $request['name']; 



// 
if ($logo) {
    $file = public_path('/images/partners/').$partenaire->logo;
    if($file){

        if(File::isFile($file)){
            \File::delete($file);
        }
    }
   $partenaire->logo = time().'.'.$logo->getClientOriginalExtension();
   $input['imagename'] = time().'.'.$logo->getClientOriginalExtension();
   $destinationPath = public_path('/images/partners');
   $logo->move($destinationPath, $input['imagename']); 
}

$partenaire->name=$name;

$partenaire->save();
//

//Display a successful message upon save
return redirect()->route('partenaire.show',$partenaire->id)
->with('flash_message', 'Partenaire,
'. $partenaire->name.' created');
}
/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
$partenaire = Partenaire::findOrFail($id);
$partenaire->delete();
return redirect()->route('partenaire.index')
->with('flash_message',
'Partenaire successfully deleted');
}
}