@extends('layouts.master_1')
@section('content')

<div class="row">
		<h1 id="centred_title">Page {{ $evenements->currentPage() }} of {{ $evenements->lastPage() }}</h1>
		<div class="ui   cards">
			@foreach($evenements as $evenement)
			<div class="ui card">
			<div class="content">
					<div class="header">
					<a href="{{route('evenement.show',$evenement->id)}}">{{$evenement->title}}</a>
					</div>
					<div class="meta">
					{{$evenement->created_at->diffForHumans()}}
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	@can('Create Evenement')
<div class="row">
		<a class="fluid ui orange large button" href="{{URL::to('evenement\create')}}"> 
<i class="handshake icon"></i>
		Ajouter des Evenements</a>

</div>
@endcan
@endsection