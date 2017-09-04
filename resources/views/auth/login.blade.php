@extends('layouts.login')



@section('content')

<!-- Page Title-->
    <!-- Navbar-->

    <!-- Remove ".navbar-sticky" class to make navigation bar scrollable with the page.-->

    <header class="navbar navbar-sticky" style="margin-bottom:0;">
    
          <!-- Search-->
    
          <form class="site-search" method="get">
    
            <input type="text" name="site_search" placeholder="Type to search...">
    
            <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>
    
          </form>
    
          <div class="site-branding">
    
            <div class="inner">
    
              <!-- Off-Canvas Toggle (#shop-categories)--><a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a>
    
              <!-- Off-Canvas Toggle (#mobile-menu)--><a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
    
              <!-- Site Logo--><a class="site-logo" href="/"><img src="{{ asset('img/logo/sproos-logo.png') }}" alt="Sproos"></a>
    
            </div>
    
          </div>
    
          <!-- Main Navigation-->
    
          <nav class="site-menu">
    
            <ul>
    
              <li><a href="/"><span>Home</span></a>
    
              </li>
    
              <li><a href="/shop-grid"><span>Buy</span></a>
              </li>
    
              <li><a href="#"><span>More</span></a>
    
                <ul class="sub-menu">
    
                    <li><a href="/about">About Us</a></li>
    
                    <li><a href="/terms">Terms of use</a></li>
    
                    <li><a href="/contacts-us">Contacts</a></li>
    
                    <li><a href="/faq">Help / FAQ</a></li>
    
                </ul>
    
              </li>
    
              <li><a href="/register"><span>REGISTER</span></a></li>
              <li><a href="/login"><span>LOG IN</span></a></li>
            </ul>
    
          </nav>
    
          <!-- Toolbar-->
    
          <div class="toolbar">
    
            <div class="inner">
    
              <div class="tools">
    
                <div class="search"><i class="icon-search"></i></div>
            
    
              </div>
    
            </div>
    
          </div>
    
        </header>
<div class="container-fluid" style="max-width:500px; padding:10px;">
    <div class="row">
        <div class="login-box">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="row margin-bottom-1x">
                        <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block facebook-btn" href="/redirect"><i class="socicon-facebook"></i>&nbsp;Facebook login</a></div>
                        <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block twitter-btn" href=""><i class="socicon-twitter"></i>&nbsp;Twitter login</a></div>
                        <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block google-btn" href=""></i>&nbsp;Google+ login</a></div>
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
                                <span class="help-block ">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"  name="remember" {{ old('remember') ? 'checked' : '' }} checked><span class="custom-control-indicator"></span><span class="custom-control-description">Remember me</span>
                        </label><a class="navi-link" href="{{ route('password.request') }}">Forgot password?</a>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <a href="{{ route('register') }}" type="submit" class="btn btn-primary">
                                    Register
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
