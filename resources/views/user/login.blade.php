@extends('layouts.basic');
@section('title', 'Login')
@section('content')
<div class="container">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form action="{{ route('login.action') }}" method="POST">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Nico" type="username" name="username" value="{{ old('username') }}" autofocus/>
                            </div>
                            <div class="form-group">
                                    <label>Password <span class="text-danger">*</span></label>
                                <input class="form-control" type="password" name="password" />
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <button class="btn btn-success">Login</button>
                            <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
                            <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection