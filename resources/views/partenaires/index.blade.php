@extends('layouts.master_1')
@section('content')

	
	<div class="row">
		<h1 id="centred_title">Page {{ $partenaires->currentPage() }} of {{ $partenaires->lastPage() }}</h1>
		<div class="ui container three cards">
			@foreach($partenaires as $partenaire)
			<div class="ui card">
			<a class="image" href="#">
			<img src="{{asset('images/partners/'.$partenaire->logo)}}">
           </a>
				<div class="content">
					<div class="header"><a href="{{route('partenaire.show',$partenaire->id)}}">{{$partenaire->name}}</a>
					</div>
					<div class="meta">
					{{$partenaire->created_at->diffForHumans()}}
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>

@can('Create Partenaire')
<div class="row">
		<a class="fluid ui orange large button" href="{{URL::to('partenaire\create')}}"> 
<i class="handshake icon"></i>
		ajouter des Partenaires</a>
</div>
@endcan
@endsection