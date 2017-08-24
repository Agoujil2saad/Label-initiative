<div class="row">

 <h1 class="ui center aligned icon header">
    <i class="circular privacy icon"></i> 
    gestion des utilisateurs <br>
  <a href="{{route('roles.index')}}" class="ui green button"> gestion des Roles</a>
  <a href="{{route('permissions.index')}}" class="ui blue button">gestion des Permissions</a>
  </h1>
  <table class="ui very padded unstackable celled table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Date/Time Added</th>
        <th>User Roles</th>
        <th>Operations</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
      <tr>
                 <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                    <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                    <td>
                    <a href="{{ route('users.edit', $user->id) }}" class="ui left floated button">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'ui right floated red button']) !!}
                    {!! Form::close() !!}

                    </td>
      </tr>
    @endforeach
    </tbody>
    </table>

             <a href="{{ route('users.create') }}" class="ui  animated blue button" style="margin:2em;">
<div class="visible content">Add User</div>
  <div class="hidden  content">
    <i class="add  user  icon"></i>
  </div>
         </a>

 </div>