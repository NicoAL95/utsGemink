@extends('layouts.basic');
@section('title', 'Register')
@section('content');
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Register</h3>
                </div>
                <div class="panel-body">
                    @if($errors->any())
                @foreach($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
                @endif
                    <form form action="{{ route('register.action') }}" method="POST">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <label>Name <span class="text-danger">*</span></label>
                                <input class="form-control" placeholder="Nico Abel Laia" type="text" name="name" value="{{ old('name') }}" autofocus />
                            </div>
                            <div class="form-group">
                                <label>Username <span class="text-danger">*</span></label>
                                <input class="form-control" placeholder="nico_a_l" type="username" name="username" value="{{ old('username') }}" autofocus />
                            </div>
                            <div class="form-group">
                                <label>Password <span class="text-danger">*</span></label>
                                <input class="form-control" placeholder="Password" type="password" name="password" />
                            </div>
                            <div class="form-group">
                                <label>Password Confirmation<span class="text-danger">*</span></label>
                                <input class="form-control" type="password" name="password_confirm" />
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button class="btn btn-primary">Register</button>
                            <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
                            <a class="btn btn-success" href="{{ route('login') }}">Login</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection