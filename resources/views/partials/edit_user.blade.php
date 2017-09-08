<div class="row">
	<div class="nine wide column">
		{{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}
		<div class="ui form segment">
			<h1 class="ui header">Edit {{$user->name}}</h1>
			<div class="ui centered grid">
				<div class="eight wide column">
					<div class="field">
						<label>Nom du l'utilisateur</label>
						<div class="ui left icon input">
							<input type="text" name="name" value="{{$user->name}}" required>
							<i class="user icon orange"></i>
						</div>
					</div>
					<div class="field">
						<label>Nom du l'utilisateur</label>
						<div class="ui left icon input">
							<input type="email" name="email" value="{{$user->email}}" required>
							<i class="mail icon orange"></i>
						</div>
					</div>
				</div>
				<div class="eight wide column">
					<div class="grouped fields">
						<label>donner un role</label>
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
					<button class="ui orange right labeled icon button" type="submit">
					modifier {{$user->name}}
					<i class="add user icon"></i>
					</button>
				</div>
			</div>
			<p>Tout les champs avec * doivent être obligatoirement remplis</p>
		</div>
		{{ Form::close() }}
	</div>
</div>