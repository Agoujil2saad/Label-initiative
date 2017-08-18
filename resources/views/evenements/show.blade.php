@extends('layouts.master_1')
@section('content')
<div class="row">
	
	
	<div class="ui very padded segment">
<center> <h1>{{{$evenement->title}}}</h1></center>
<p>{{$evenement->body}}</p>

    {!! Form::open(['method' => 'DELETE', 'route' => ['evenement.destroy', $evenement->id] ]) !!}

    <a href="{{ url()->previous() }}" class="ui orange fluid  button"> 
    <i class="backward icon"></i>Back</a>

    @can('Edit Partenaire')
    <br>
    <a href="{{ route('evenement.edit', $evenement->id) }}" class="ui green button" role="button">
    <i class="edit icon"></i>Edit</a>
    @endcan
    @can('Delete Partenaire')
    {!! Form::submit('Delete', ['class' => 'ui red button ']) !!}
    @endcan
    {!! Form::close() !!}
	</div>

</div>

@endsection
