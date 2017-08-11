@extends('layouts.master_1')
@section('title','|create Permission')
@section('content')
<div class="row">
	<div class="nine wide column">
		{{-- Using the Laravel HTML Form Collective to create our form --}}
		{{ Form::open(array('url' => 'permissions')) }}
		<div class="ui form segment">
			<div class="ui centered grid">
				<div class="eight wide column">
					<div class="field">
						<label>Nom du l'utilisateur</label>
						<div class="ui left icon input">
							<input type="text" name="name" placeholder="Nom Complet" required>
							<i class="user icon orange"></i>
						</div>
					</div>
				</div>
			</div>
			
			<div class="ui one column stackable center aligned page grid">
				<div class="column twelve wide">
					<!-- <button class="ui orange button">Suivant</button> -->
					<button class="ui orange right labeled icon button" type="submit">
					modifer une permission
					<i class="write icon"></i>
					</button>
				</div>
			</div>
			<!-- <div class="ui fluid medium orange submit button">Suivant</div> -->
			<p>Tout les champs avec * doivent être obligatoirement remplis</p>
		</div>
		{{ Form::close() }}
	</div>
</div>
@endsection