<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Sproos Seller | Register</title>

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

<body class="hold-transition register-page">
<div class="register-box">
  

  <div class="register-box-body">
  <div class="register-logo">
    <a href="/seller">Sproos<b>Seller</b></a>
  </div>
    <p class="login-box-msg"><span style="color:red;">*</span>Register as a Sproos seller. <br>Fill in your correct details.</p>

    <form action="{{url('/seller-register')}}" method="post">
    {{ csrf_field() }}
    <!-- First Name-->
      <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }} has-feedback">
        <input type="text" class="form-control" placeholder="First name" name="first_name" id="first_name" required>
          @if ($errors->has('first_name'))
              <span class="help-block">
                  <strong>{{ $errors->first('first_name') }}</strong>
              </span>
          @endif
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <!--Last Name -->
      <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }} has-feedback">
        <input type="text" class="form-control" placeholder="Last Name" name="last_name" id="last_name" required>
          @if ($errors->has('last_name'))
              <span class="help-block">
                  <strong>{{ $errors->first('last_name') }}</strong>
              </span>
          @endif
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <!-- Email -->
      <div class="form-group has-feedback">
        <input type="email" class="form-control"  placeholder="Email" name="email" id="email" required>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <!-- /. Email -->

      <!-- Phone -->
      <div class="form-group has-feedback">
        <input type="tel" class="form-control" placeholder="Your Phone Number" required name="phonenumber" id="phonenumber">
        @if ($errors->has('phonenumber'))
            <span class="help-block">
                <strong>{{ $errors->first('phonenumber') }}</strong>
            </span>
        @endif
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
      <!-- /. Phone -->

      <!-- Password-->
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <!-- /. Password -->

      <!-- Password confirm -->
      <div class="form-group has-feedback">
        <input type="password" class="form-control" required placeholder="Retype password" name="password_confirmation" id="password-confirm">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <!-- /. Password confirm -->


      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label> </label>
              <input type="checkbox" id="seller_terms" checked> I agree to the <a href="#">terms</a>
            
          </div>
        </div>

        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register Me</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <a href="/seller-login" class="text-center">I'm already a seller?</a></br>
    <a href="/welcome" class="btn btn primary" style="border-color : #ee2956;">Back to home</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script src=" {{ asset('plugins/iCheck/icheck.min.js' )}}"></script>
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