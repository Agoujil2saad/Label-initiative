@extends('layouts.master_1')
@section('content')

<div class="row" >
		<h1 id="centred_title">Page {{ $evenements->currentPage() }} of {{ $evenements->lastPage() }}</h1>
		<div class="ui   cards">
			@foreach($evenements as $evenement)

			<div class="ui card">
  <div class="ui image">

    <img src="{{asset('storage/'.$evenement->photos[0]->filename)}}" class="visible content">
@if(count($evenement->photos)<=1)
    <img src="{{asset('images/synergie.png')}}" class="hidden content">
@else
  <img src="{{asset('storage/'.$evenement->photos[1]->filename)}}" class="hidden content">
@endif
  </div>
  <div class="content">
    <a class="header"><a href="{{route('evenement.show',$evenement->id)}}">{{$evenement->title}}</a></a>
    <div class="meta">
      <span class="date">{{$evenement->created_at->diffForHumans()}}</span>
    </div>
  </div>
  <div class="extra content">

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