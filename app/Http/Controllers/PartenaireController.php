<?php
namespace App\Http\Controllers;

use App\Partenaire;
use Illuminate\Database\Eloquent\findOrFail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PartenaireController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','clearance'])->except('index','show');
    }

    public function index()
    {
        $partenaires = Partenaire::orderby('id', 'desc')->paginate(5);
        return view('partenaires.index', compact('partenaires'));
    }

    public function create()
    {
        return view('partenaires.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
        $logo = $request->file('logo');
        $name = $request['name'];
        $partenaire= Partenaire::create($request->only('name'));

        if($logo) 
        {
            $input['imagename'] = time().'.'.$logo->getClientOriginalExtension();
            $destinationPath = public_path('/images/partners');
            $logo->move($destinationPath, $input['imagename']);
            $partenaire->logo = time().'.'.$logo->getClientOriginalExtension();
            $partenaire->save();
        }

        return redirect()->route('partenaire.index')->with('flash_message', 'Partenaire,'. $partenaire->name.' created');
    }

    public function show($id)
    {
        $partenaire = Partenaire::findOrFail($id);
        return view ('partenaires.show', compact('partenaire'));
    }

    public function edit($id)
    {
        $partenaire = Partenaire::findOrFail($id);
        return view('partenaires.edit', compact('partenaire'));
    }

    public function update(Request $request, $id)
    {
        $partenaire = Partenaire::findOrFail($id);

        $logo = $request->file('logo');
        $name = $request['name']; 

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

        return redirect()->route('partenaire.show',$partenaire->id)->with('flash_message', 'Partenaire,'. $partenaire->name.' created');
    }

    public function destroy($id)
    {
        $partenaire = Partenaire::findOrFail($id);
        $partenaire->delete();
        return redirect()->route('partenaire.index')->with('flash_message','Partenaire successfully deleted');
    }
}