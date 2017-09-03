@extends('layouts.master_1')
@section('content')
<div class=" relaxed row">
	<div class="nine wide column">
     <div class="ui very padded fluid segment">
<center> <h1>{{{$evenement->title}}}</h1></center>
<p class="ui fluid segment">{{$evenement->body}}</p>

<div id="photo_caroussel">
<template>
  <el-carousel :interval="4000">
@foreach($evenement->photos as $photo)
    <el-carousel-item>
      <img src="{{asset('storage/'.$photo->filename)}}" class="ui fluid image">
    </el-carousel-item>
@endforeach
  </el-carousel>
</template>
</div>

    {!! Form::open(['method' => 'DELETE', 'route' => ['evenement.destroy', $evenement->id] ]) !!}

    <a href="{{ url()->previous() }}" class="ui orange fluid  button"> 
    <i class="backward icon"></i>Back</a>

 
    <br>
    <a href="{{ route('evenement.edit', $evenement->id) }}" class="ui green button" role="button">
    <i class="edit icon"></i>Edit</a>
   
    
    {!! Form::submit('Delete', ['class' => 'ui red button ']) !!}

    {!! Form::close() !!}
    </div>


    </div>
	
	

</div>

@endsection
