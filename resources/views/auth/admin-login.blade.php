@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center login-row">
        <div class="">
            <div id="loginForm" class="col-md-12 col-md-offset-1 col-sm-12 card">
                <div class="login-header">
                <h3 class="">Admin Login</h3>
                </div>
                <hr>

                <div class="card-body login-body">
                    <form class="form-horizontal" method="POST" action="{{ route('admin.login.submit') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-12 col-sm-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-12 col-sm-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <div class="checkbox">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Login
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <a class="btn btn-link text-muted login-body" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
