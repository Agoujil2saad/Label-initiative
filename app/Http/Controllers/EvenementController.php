<?php
namespace App\Http\Controllers;
use App\Evenement;
use App\EvenementsPhoto;
use App\Http\Requests\UploadEvenementRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
class EvenementController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function __construct()
{
  $this->middleware(['auth','clearance'])->except('index','show');
}
public function index() {
$evenements = Evenement::orderby('id', 'desc')->paginate(5); //show only 5 items at a time in descending order
return view('evenements.index', compact('evenements'));
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('evenements.create');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(UploadEvenementRequest $request)
{
//
 $evenement = Evenement::create($request->all());
 
 foreach ($request->photos as $photo) {
            $filename = $photo->store('photos','public');
            EvenementsPhoto::create([
                'evenement_id' => $evenement->id,
                'filename' => $filename
            ]);
        }

//Display a successful message upon save
return redirect()->route('evenement.index')
->with('flash_message', 'Evenement,
'. $evenement->title.' created');
}
/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
$evenement = Evenement::findOrFail($id);
return view('evenements.show',compact('evenement'));
}
/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
$evenement = Evenement::findOrFail($id);
return view('evenements.edit', compact('evenement'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(UploadEvenementRequest $request, $id)
{
$evenement = Evenement::findOrFail($id);
$photos = $evenement->photos;
foreach ($photos as $photo) {
    $file = storage_path('/app/public/').$photo->filename;
  if ($file) {
      if(File::isFile($file)){
            \File::delete($file);
        }
  }
}
 $evenement->delete();
$this->store($request);
//Display a successful message upon save
return redirect()->route('evenement.index')
->with('flash_message','Evenement,
'.$evenement->title.'Updated');
}



/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{

$evenement = Evenement::findOrFail($id);
$photos = $evenement->photos;
foreach ($photos as $photo) {
    $file = storage_path('/app/public/').$photo->filename;
  if ($file) {
      if(File::isFile($file)){
            \File::delete($file);
        }
  }
}
        $evenement->delete();
        return redirect()->route('evenement.index')
            ->with('flash_message',
             ' Evenement successfully deleted');  
    }
}
