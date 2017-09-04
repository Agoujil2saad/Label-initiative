@extends('layouts.master_1')
@section('content')
<div class="row">
	
	
	<div class="ui very padded segment">
		<div class="ui orange  header">
		
		<img src="{{asset('images/partners/'.$partenaire->logo)}}" class="ui avatar image">
		<div class="content">
			{{$partenaire->name}}
		</div>
	</div>
    
@role('Admin')
    {!! Form::open(['method' => 'DELETE', 'route' => ['partenaire.destroy', $partenaire->id] ]) !!}

    <a href="{{ url()->previous() }}" class="ui orange fluid  button"> 
    <i class="backward icon"></i>Back</a>

    @can('Edit Partenaire')
    <br>
    <a href="{{ route('partenaire.edit', $partenaire->id) }}" class="ui green button" role="button">
    <i class="edit icon"></i>Edit</a>
    @endcan
    @can('Delete Partenaire')
    {!! Form::submit('Delete', ['class' => 'ui red button ']) !!}
    @endcan
    {!! Form::close() !!}
@endrole

	</div>

</div>

@endsection
