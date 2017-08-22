<?php

namespace App\Http\Controllers;

use App\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
      $this->middleware(['auth','clearance'])->except('index', 'show');
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
    public function store(Request $request)
    {
         $this->validate($request, [
            'title'=>'required|max:100',
            'description' =>'required',
            'montant_estime'=>'required'
            ]);
 $projet = Projet::create([
'user_id'=> auth()->id(),
'title' => request('title'),
 'description' => request('description'),
 'montant_estime' =>  request('montant_estime')
 ]);
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
    {     $projet = Projet::findOrFail($id); //Find post of id = $id

        return view ('projets.edit', compact('projet'));
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
         $this->validate($request, [
            'title'=>'required|max:100',
            'description' =>'required',
            'montant_estime'=>'required'
            ]);


$projet = Projet::findOrFail($id); //Find post of id = $id

        $title = $request->input('title');
        $description = $request->input('description');
        $montant_estime = $request->input('montant_estime');

        $projet->save();
//Display a successful message upon save
        return redirect()->route('projet.show',$projet->id)
            ->with('flash_message','Projet'.$projet->title.' updated');
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
        $projet->delete();

        return redirect()->route('projet.index')
            ->with('flash_message',
             ' Projet successfully deleted');  
              }
}
