<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Sproos Admin | Log in</title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.6 -->

  <link rel="stylesheet" href="{{asset('adminscript/bootstrap/css/bootstrap.min.css')}}">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- Ionicons -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Theme style -->

  <link rel="stylesheet" href="{{asset('adminscript/dist/css/AdminLTE.min.css')}}">

  <!-- iCheck -->

  <link rel="stylesheet" href="{{asset('adminscript/plugins/iCheck/square/blue.css')}}">



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->


  <style>
         b{
           color : #ee2956;
         }
         .login-box{
           background : #fff;
         }
         .form-control {
	          border-radius: 20px;
	          box-shadow: none;
	          border-color: #ee2956;

         }
         .btn.btn-flat {
            border-radius : 20px;
         }
         .glyphicon{
            color : #ee2956;
         }
         .btn-primary{
           background : transparent;
           border-color : #ee2956;
           color : #ee2956;
         }
  
  </style>

</head>

<body class="hold-transition login-page">

<div class="login-box">

  <div class="login-logo">

    <a href="../../index2.html"><b>Seller</b> Sproos</a>

  </div>

  <!-- /.login-logo -->

  <div class="login-box-body">

    <p class="login-box-msg">Sign in to start your session</p>

    

    @include('includes.messages')

    

    <form action="{{ route('seller.login') }}" method="post">

    {{ csrf_field() }}

      <div class="form-group has-feedback">

        <input type="email" class="form-control" name="email" placeholder="Email">
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" name="password" placeholder="Password">

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>

      <div class="row">

        <div class="col-xs-8">

          <div class="checkbox icheck">

            <label>

              <input type="checkbox"> Remember Me

            </label>

          </div>

        </div>

        <!-- /.col -->

        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>

        </div>

        <!-- /.col -->

      </div>

    </form>



    <a href="#">I forgot my password</a><br>
    <hr>
    <p>Or, need a sellers account? <a href="{{ route('seller.register') }}">Signup</a> here</p>



  </div>

  <!-- /.login-box-body -->

</div>

<!-- /.login-box -->



<!-- jQuery 2.2.3 -->

<script src="{{ asset('adminscript/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>

<!-- Bootstrap 3.3.6 -->

<script src="{{ asset('adminscript/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- iCheck -->

<script src="{{ asset('adminscript/plugins/iCheck/icheck.min.js') }}"></script>

<script>

  $(function () {

    $('input').iCheck({

      checkboxClass: 'icheckbox_square-blue',

      radioClass: 'iradio_square-blue',

      increaseArea: '20%' // optional

    });

  });

</script>

</body>

</html>