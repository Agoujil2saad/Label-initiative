<div class="row">
	<div class="nine wide column">
		{{-- Using the Laravel HTML Form Collective to create our form --}}
		{{ Form::open(array('route' => 'users.store')) }}
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
					<div class="field">
						<label>Email du l'utilisateur</label>
						<div class="ui left icon input">
							<input type="email" name="email" placeholder="email" required>
							<i class="mail icon orange"></i>
						</div>
					</div>
				</div>
				<div class="eight wide column">
					<div class="grouped fields">
						<label>Role?</label>
						@foreach($roles as $role)
						<div class="field">
							<div class="ui radio checkbox">
								<input type="radio" name="roles[]" value="{{$role->id}}">
								<label>{{$role->name}}</label>
							</div>
						</div>
						@endforeach
					</div>

				<div class="field">
          <label>Mot de passe*</label>
          <div class="ui left icon input">
            <input id="password" type="password"  name="password" required>
            <i class="lock icon orange"></i>
            
          </div>
        </div>
        <div class="field">
          <label>Confirmation de mot de passe* <br></label>
          <div class="ui left icon input">
            <input id="password-confirm" type="password" name="password_confirmation" required>
            <i class="lock icon orange"></i>
          </div>
        </div>
				</div>
				
			</div>
			
			<div class="ui one column stackable center aligned page grid">
				<div class="column twelve wide">
					<!-- <button class="ui orange button">Suivant</button> -->
					<button class="ui orange right labeled icon button" type="submit">
					Creer un utilisateur
					<i class="add user icon"></i>
					</button>
				</div>
			</div>
			<!-- <div class="ui fluid medium orange submit button">Suivant</div> -->
			<p>Tout les champs avec * doivent être obligatoirement remplis</p>
		</div>
		{{ Form::close() }}
	</div>
</div>