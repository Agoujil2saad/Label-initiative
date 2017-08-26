@extends('layouts.master_1')
@section('content')

<div class="row" >
<div class="eleven wide column">
		<h1 id="centred_title">Page {{ $evenements->currentPage() }} of {{ $evenements->lastPage() }}</h1>
		<div class="ui four cards">
			@foreach($evenements as $evenement)

			<div class="ui  card">
    <img src="{{asset('storage/'.$evenement->photos[0]->filename)}}" class="ui image" >


  <div class="content">
    <a class="header"><a href="{{route('evenement.show',$evenement->id)}}">{{$evenement->title}}</a></a>
    <div class="meta">
      <span class="date">{{$evenement->created_at->diffForHumans()}}</span>
    </div>
  </div>
 
</div>
			@endforeach
</div>

	</div>

</div>

<div class="row">
    <a class="fluid ui orange large button" href="{{URL::to('evenement\create')}}"> 
<i class="handshake icon"></i>
    Ajouter des Evenements</a>
</div>
@endsection