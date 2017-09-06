@extends('layouts.master_1')
@section('title', '| Create New Post')
@section('content')
<div class="row" id="evenement_create">
	@include('layouts.errors')
	<div class="nine wide column">
		{{-- Using the Laravel HTML Form Collective to create our form --}}
		{{ Form::open(array('route' => 'evenement.store','files' => true)) }}
		<div class="ui form segment">
			<div class="ui centered grid">
				<div class=" column">
					
					<div class="field">
						<label>Titre du evenement*</label>
						<div class="ui left icon input">
							<input type="text" name="title" placeholder="Titre du evenement" required>
							<i class="user icon orange"></i>
						</div>
					</div>
					<div class="field">
						<label>Description de l'evenement</label>
						<textarea name="body" required></textarea>
					</div>

					<div class="field">
						<input type="file" name="photos[]" multiple />
					</div>

					<div class="ui left icon input">
						<input type="text" name="url" placeholder="url vers l'evenement ">
						<i class="world icon"></i>
					</div>

				</div>
				
			</div>
			
			<div class="ui one column stackable center aligned page grid">
				<div class="column twelve wide">
					
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
			</div>
			<p>Tout les champs avec * doivent être obligatoirement remplis</p>
		</div>
		{{ Form::close() }}
	</div>
</div>
@endsection