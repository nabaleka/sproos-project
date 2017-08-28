@extends('layouts.login')

@section('content')
<!-- Page Title-->

<div class="container-fluid" style="max-width:500px; padding:10px;">
    <div class="row">
        <div class="login-box">
        <div>
        <h2>Registration form</h2>
        <p>Register for a Sproos account with </p>
        </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}"}>
                        {{ csrf_field() }}

                        <div class="row margin-bottom-1x">
                        <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block facebook-btn" href="/redirect"><i class="socicon-facebook"></i>&nbsp;Facebook login</a></div>
                        <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block twitter-btn" href=""><i class="socicon-twitter"></i>&nbsp;Twitter login</a></div>
                        <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block google-btn" href=""></i>&nbsp;Google+ login</a></div>
                        </div>
                        <h4 class="margin-bottom-1x">Or using form below</h4>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <div>
                            <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"  name="agree" id="agree" {{ old('remember') ? 'checked' : '' }} checked><span class="custom-control-indicator"></span><span class="custom-control-description">I have read and agree to the </span>
                        </label><a class="navi-link" href="">terms and conditions</a> of the use of this service.
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>


                        <div>
                            Go back <a href="/">home.</a>
                        </div>


                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
