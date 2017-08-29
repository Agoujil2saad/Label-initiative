<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadProjetRequest;
use App\Projet;
use App\ProjetsPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
      // $this->middleware(['auth','clearance'])->except('index', 'show');
    }
    public function index()
    {
          $projets = Projet::orderby('id', 'desc')->paginate(5); //show only 5 items at a time in descending order

        return view('projets.index', compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UploadProjetRequest $request)
    {
      
 $projet = Projet::create($request->all());
  foreach ($request->photos as $photo) {
            $filename = $photo->store('photos','public');
            ProjetsPhoto::create([
                'projet_id' => $projet->id,
                'filename' => $filename
            ]);
        }
//Display a successful message upon save
        return redirect()->route('projet.index')
            ->with('flash_message', 'Projet'.$projet->title.' created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $projet = Projet::findOrFail($id); //Find post of id = $id

        return view ('projets.show', compact('projet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
      $projet = Projet::findOrFail($id); //Find post of id = $id

        return view ('projets.edit', compact('projet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updatephotos(UploadProjetRequest $request, $id)
    {
 $projet = Projet::findOrFail($id);

foreach ($request->photos as $photo) {
            $filename = $photo->store('photos','public');
            ProjetsPhoto::create([
                'projet_id' => $id,
                'filename' => $filename
            ]);
        }

//Display a successful message upon save
return redirect()->route('projet.edit',$id)
->with('flash_message','Projet Updated');
    }

      public function update(Request $request, $id)
    {

$this->validate($request,[
            'title'=>'required|max:100',
            'description' =>'required',
            'montant_estime'=>'required',
            'categorie' => 'required']);

$projet = Projet::findOrFail($id);

$projet->title = $request->input('title');
$projet->description = $request->input('description');
$projet->montant_estime = $request->input('montant_estime');
$projet->categorie = $request->input('categorie');

$projet->save();

//Display a successful message upon save
return redirect()->route('projet.index')
->with('flash_message','Projet,
'.$projet->title.'Updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
   $projet = Projet::findOrFail($id);
$photos = $projet->photos;
foreach ($photos as $photo) {
    $file = storage_path('/app/public/').$photo->filename;
  if ($file) {
      if(File::isFile($file)){
            \File::delete($file);
        }
  }
}
        $projet->delete();

        return redirect()->route('projet.index')
            ->with('flash_message',
             ' Projet successfully deleted');  
              }

public function destroyphoto($id)         
{
    
    $photo = ProjetsPhoto::findOrFail($id);
    $projet_id=$photo->projet->id;
      $file = storage_path('/app/public/').$photo->filename;
  if ($file) {
      if(File::isFile($file)){
            \File::delete($file);
        }
  }
  $photo->delete();
  return redirect()->route('projet.edit',$projet_id)
->with('flash_message','photo Deleted');
    }


public function favoriteProjet(Projet $projet)
{
             Auth::user()->favorite($projet);
              return back();
}
      public function unFavoriteProjet(Projet $projet)
{
    Auth::user()->unfavorite($projet);

    return back();
}      
}


