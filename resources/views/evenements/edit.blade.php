@extends('layouts.master_1')
@section('title', '| Create New Post')
@section('content')
<div class="row">
	<div class="nine wide column">
		<h2 class="ui header">
		Modification de l'evenement:{{$evenement->title}}
		</h2>
		@include('layouts.errors')
		{!! Form::model($evenement, ['method' => 'PATCH', 'action' =>  ['EvenementController@update', $evenement->id] ,'files' => true]) !!}
		<div class="ui form segment">
			<div class="field">
				<label>titre du evenement*</label>
				<div class="ui left icon input">
					<input type="text" name="title" value="{{$evenement->title}}" required>
					<i class="user icon orange"></i>
				</div>
			</div>
			<div class="field">
				<label>description  de l'evenement</label>
				<textarea name="body">
				{{$evenement->body}}
				</textarea>
			</div>
			<div class="field">
				<input type="file" name="photos[]" multiple />
			</div>
			<div class="field">
				
				<div class="ui left icon input">
					<input type="text" name="url" placeholder="url vers l'evenement" value="{{$evenement->url}}">
					<i class="world icon"></i>
				</div>
			</div>
			
			<div class="field">
				<div class="ui small buttons">
					<button class="ui orange right labeled icon button" type="submit">
					Ajouter un evenement
					<i class="right chevron icon"></i>
					</button>
					<div class="or"></div>
					<a class="ui red right labeled icon button"  href="{{ url()->previous() }}">
						Annuler
						<i class="undo icon"></i>
					</a>
				</div>
			</div>
			<p>Tout les champs avec * doivent être obligatoirement remplis</p>
		</div>
		{{ Form::close() }}
	</div>
</div>
@endsection