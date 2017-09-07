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
    public function __construct()
    {
        $this->middleware(['auth','clearance'])->except('index','show');
    }

    public function index() {
        $evenements = Evenement::orderby('id', 'desc')->paginate(5);
        return view('evenements.index', compact('evenements'));
    }

    public function create()
    {
        return view('evenements.create');
    }

    public function store(UploadEvenementRequest $request)
    {
        $evenement = Evenement::create($request->all());
        foreach ($request->photos as $photo) {
            $filename = $photo->store('photos','public');
            EvenementsPhoto::create([
                'evenement_id' => $evenement->id,
                'filename' => $filename
            ]);
        }

        return redirect()->route('evenement.index')->with('flash_message', 'Evenement,'. $evenement->title.' created');
    }

    public function show($id)
    {
        $evenement = Evenement::findOrFail($id);
        return view('evenements.show',compact('evenement'));
    }

    public function edit($id)
    {
        $evenement = Evenement::findOrFail($id);
        return view('evenements.edit', compact('evenement'));
    }

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
        return redirect()->route('evenement.index')->with('flash_message','Evenement,'.$evenement->title.'Updated');
    }

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
        return redirect()->route('evenement.index')->with('flash_message','Evenement successfully deleted');  
    }
}
