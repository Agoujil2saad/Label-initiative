<?php
namespace App\Http\Controllers;
use App\Evenement;
use Illuminate\Http\Request;
class EvenementController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
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
public function store(Request $request)
{
$this->validate($request,
[
'title'=>'required',
'body' => 'required|max:2048'
]);
//
$body = $request['body'];
$title = $request['title'];
$evenement= Evenement::create($request->only('title','body'));
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
public function update(Request $request, $id)
{

$this->validate($request,
[
'title'=>'required',
'body' => 'required|max:2048'
]);
$evenement = Evenement::findOrFail($id);
//
$title = $request->input('title');
$body = $request->input('body');
$evenement->title= $title;
$evenement->body= $body;
$evenement->save();

//Display a successful message upon save
        return redirect()->route('evenement.show',$evenement->id)
            ->with('flash_message', 'Evenement'. $evenement->title.' updated');
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
        $evenement->delete();

        return redirect()->route('evenement.index')
            ->with('flash_message',
             ' Evenement successfully deleted');  
    }
}
