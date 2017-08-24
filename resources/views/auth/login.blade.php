@extends('layouts.login')

@section('content')
<!-- Page Title-->
<div class="page-title">
<div class="container">
    <div class="column">
    <h1>Login / Register Account</h1>
    </div>
    <div class="column">
    <ul class="breadcrumbs">
        <li><a href="/">Home</a>
        </li>
        <li class="separator">&nbsp;</li>
        <li><a href="account-profile">Account</a>
        </li>
        <li class="separator">&nbsp;</li>
        <li>Login / Register</li>
    </ul>
    </div>
</div>
</div>

<div class="container-fluid" style="max-width:500px; padding:20px;">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                        <div class="row margin-bottom-1x">
                        <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block facebook-btn" href="redirect/facebook"><i class="socicon-facebook"></i>&nbsp;Facebook login</a></div>
                        <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block twitter-btn" href="redirect/twitter"><i class="socicon-twitter"></i>&nbsp;Twitter login</a></div>
                        <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block google-btn" href="#"><i class="socicon-googleplus"></i>&nbsp;Google+ login</a></div>
                        </div>
                        <h4 class="margin-bottom-1x">Or using form below</h4>
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} input-group">
                        <input class="form-control" type="email" name="email" placeholder="Email" required><span class="input-group-addon"><i class="icon-mail"></i></span>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} input-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required><span class="input-group-addon"><i class="icon-lock"></i></span>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="d-flex flex-wrap justify-content-between padding-bottom-1x">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"  name="remember" {{ old('remember') ? 'checked' : '' }} checked><span class="custom-control-indicator"></span><span class="custom-control-description">Remember me</span>
                        </label><a class="navi-link" href="#">Forgot password?</a>
                        </div>


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <a href="{{route('register')}}" type="submit" class="btn btn-primary">
                                    Register
                            </a>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
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


<!--
          <div class="col-md-6">

          </div>



<form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                 <a href="{{route('register')}}" type="submit" class="btn btn-primary">
                                    Register
                               </a>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>

                    -->