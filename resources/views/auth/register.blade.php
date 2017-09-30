@extends('layouts.checkout')

@section('content')
<div class="container-fluid" style="max-width:500px; padding:10px;">
    <div class="row">
        <div class="login-box">
        <div>
        <p>Register for a Sproos account with </p>
        </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}" onsubmit="return checkTerms()"}>
                        {{ csrf_field() }}

                        <div class="row margin-bottom-1x">
                        <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block facebook-btn" href="/redirect"><i class="socicon-facebook"></i>&nbsp;Facebook</a></div>
                        <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block twitter-btn" href=""><i class="socicon-twitter"></i>&nbsp;Twitter</a></div>
                        <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block google-btn" href=""></i>&nbsp;Google+</a></div>
                        </div>
                        <h4 class="margin-bottom-1x">Or using form below</h4>

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            

                            <div class="">
                                <input placeholder="Your First Name" id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            

                            <div class="">
                                <input placeholder="Your Last Name" id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                <div class=" margin-bottom-1x">
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-group">
                  <input placeholder="name@example.com" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required><span class="input-group-addon"><i class="icon-mail"></i></span>
                     @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif                
                </div>
                </div>
              </div>

                        
                            

                        
                        <div class="form-group {{ $errors->has('phonenumber') ? ' has-error' : '' }}">

                            <div class="">
                                <input placeholder="07xxxxxxxx" id="phonenumber" type="text" min=10 class="form-control" name="phonenumber" value="{{ old('email') }}" required>
                                @if ($errors->has('phonenumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phonenumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="">
                                <input placeholder="Minimum of six characters" id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            

                            <div class="">
                                <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <div>
                            <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"  name="terms" id="terms" {{ old('remember') ? 'checked' : '' }} checked><span class="custom-control-indicator"></span><span class="custom-control-description">I have read and agree to the <a class="navi-link" href="/terms">terms and conditions</a> of the use of this service.</span>
                        </label>
                        </div>

                        <script>
                            function checkTerms(){
                                var x = document.getElementById('terms').checked;
                                if(x){
                                    return true;
                                }esle{
                                    window.alert('You must accept the terms first!');
                                    return false;
                                }
                            }
                        </script>

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
