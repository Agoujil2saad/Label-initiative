@extends('layouts.master_1')
@section('content')
<div class="row">
	
	
	<div class="ui very padded segment">
		<div class="ui orange  header">
		
		<i class="idea icon"></i>
		<div class="content">
			{{$projet->title}}
		</div>
	</div>
    <p>{{$projet->description}} </p>

    {!! Form::open(['method' => 'DELETE', 'route' => ['projet.destroy', $projet->id] ]) !!}
    <a href="{{ url()->previous() }}" class="ui orange button"> 
    <i class="backward icon"></i>Back</a>
    @can('Edit Post')
    <a href="{{ route('projet.edit', $projet->id) }}" class="ui buttom" role="button">
    <i class="edit icon"></i>Edit</a>
    @endcan
    @can('Delete Post')
    {!! Form::submit('Delete', ['class' => 'ui red button ']) !!}
    @endcan
    {!! Form::close() !!}
	</div>

</div>

@endsection
