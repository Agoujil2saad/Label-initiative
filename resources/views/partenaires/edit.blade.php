@extends('layouts.master_1')
@section('title', '| Create New Post')
@section('content')
<div class="row">
	<div class="nine wide column">
<h2 class="ui header">
		<img src="{{asset('images/partners/'.$partenaire->logo)}}" class="ui circular  image">
	Modification du Partenaires:{{$partenaire->name}}
</h2>
		@include('layouts.errors')
		{{-- Using the Laravel HTML Form Collective to create our form --}}
		{!! Form::model($partenaire, ['method' => 'PATCH', 'action' =>  ['PartenaireController@update', $partenaire->id], 'files' => true]) !!}
		<div class="ui form segment">
			<div class="ui centered grid">
				<div class=" column">
					<div class="field">
						<label>Logo du partenaire</label>
						<div class="ui left icon input">
							{{ Form::file('logo', null)}}
							<i class="file icon orange"></i>
						</div>
					</div>
					<div class="field">
						<label>Nom du partenaire*</label>
						<div class="ui left icon input">
							<input type="text" name="name" value="{{$partenaire->name}}" required>
							<i class="user icon orange"></i>
						</div>
					</div>
				</div>
				
			</div>
			
			<div class="ui one column stackable center aligned page grid">
				<div class="column twelve wide">
					<!-- <button class="ui orange button">Suivant</button> -->
					<button class="ui orange right labeled icon button" type="submit">
					ajouter un partenaire
					<i class="right chevron icon"></i>
					</button>
				</div>
			</div>
			<p>Tout les champs avec * doivent être obligatoirement remplis</p>
		</div>
		{{ Form::close() }}
	</div>
</div>
@endsection