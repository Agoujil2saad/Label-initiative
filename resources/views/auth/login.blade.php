@extends('layouts.master_1')
@section('content')
<div class="row">
    <form class="ui segment form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        
        <div class="field">
            <label>*Email</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
        </div>
        
        
        <div class="field">
            <label>*Password</label>
            <input id="password" type="password" class="form-control" name="password" required>
        </div>
        
        <div class="field">
            <div class="ui checkbox">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label>Remember me</label>
            </div>
        </div>

        <div class="field">
            <button type="submit" class="ui orange button">
            Login
            </button>
            <a class="ui label" href="{{ route('password.request') }}">
                Forgot Your Password?
            </a>     
        </div>
        
    </form>
    
</div>
@endsection