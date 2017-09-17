@extends('espace_partenaire.master')
@section('espace_partenaire')
@include('partials.search_project')

<div class="row">
    <div class="ui doubling  cards">
        @foreach($projets as $projet)
        <div class="card">
            <img src="{{asset('images/home_green_projet.png')}}">
            <div class="content">
                <a class="header"><a href="{{route('projet.show',$projet->id)}}">{{$projet->title}}</a>. Poste par {{$projet->owner->name}}</a>
                <div class="meta">
                    <span class="date">{{$projet->created_at->diffForHumans()}}</span>
                </div>
            </div>
            <div class=" extra content">
                <div class="header">
                    <i class=" money orange icon"></i>
                {{$projet->montant_estime}}DH</div>
                <div class="meta" id="#message_principale" style="position: static; color: black; font-size: 14px;">
                    {{str_limit($projet->description,100)}}
                </div>
                <i class=" red heart icon"></i>{{count($projet->favoriters)}}
            </div>
        </div>
        @endforeach
    </div>
</div>
    
@endsection