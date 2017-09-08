@extends('layouts.master_1')
@section('content')
<div class="row">
<h1 class="ui header">Nos Evenement</h1></div>
<div class="  row" >
  <div class="ui four container cards">
    @foreach($evenements as $evenement)
    <div class="card">
      <img src="{{asset('storage/'.$evenement->photos[0]->filename)}}" class="ui  image" >
      <div class="content">
        <a class="header"><a href="{{route('evenement.show',$evenement->id)}}">{{$evenement->title}}</a></a>
        <div class="meta">
          <span class="date">{{$evenement->created_at->diffForHumans()}}</span>
        </div>
      </div>
      @if($evenement->url)
      <div class="extra content">
        <i class="orange world icon"></i>
        <a href="{{$evenement->url}}" target="_blank">S'inscrire dans l'evenement</a>
      </div>
      @endif
    </div>
    @endforeach
  </div>
</div>
@can('Create Evenement')
<a class="ui large button" href="{{URL::to('evenement\create')}}">
<i class=" orange large plus icon"></i>Ajouter des Evenements</a>
@endcan
@endsection