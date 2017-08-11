@extends('layouts.master_1')
@section('title', '| Users')
@section('content')
<div class="  row">
  <h1 class="ui header">User administration
  <a href="{{route('roles.index')}}" class="ui green button">Roles</a>
  <a href="{{route('permissions.index')}}" class="ui blue button">Permissions</a>
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
                    <a href="{{ route('users.edit', $user->id) }}" class="ui positive button" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'ui negative button']) !!}
                    {!! Form::close() !!}

                    </td>
      </tr>
    @endforeach
    </tbody>
    </table>

             <a href="{{ route('users.create') }}" class="ui animated button">
<div class="visible content">Add User</div>
  <div class="hidden content">
    <i class="add user icon"></i>
  </div>
         </a>
    </div>


  
@endsection