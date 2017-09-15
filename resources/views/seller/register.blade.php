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
  <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>

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
        
         .form-control{
	          border-radius: 20px;
	          box-shadow: none;
	          border-color: #e6e7e9;

         }


         .btn-primary{
           background : transparent;
           border-color : #ee2956;
           color : #ee2956;
         }

         .btn-primary:hover{
           background-color : #ee2956;
           color : #fff;
           border-color : transparent;
         }


         body{
           display:none;
         }

        .register-box{
           border-top: solid #ee2956 3px;
           max-width:90%;
           min-width:80%;;
         }
  
  </style>

        <script>
        $( document ).ready(function() {
            $("body").show('fast').fadeIn(1000);
        });
    </script>

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

    <div class = "row" >

  <div class="col-md-6">
   <p class="text-info"> <span style="color:red;">*</span>Fill in your correct details. </p>
    <!-- First Name-->
      <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }} has-feedback">
        <label>First Name</label>
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
        <label>Last Name</label>
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
      <label>Email</label>
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
      <label>Phone Number</label>
        <input type="tel" class="form-control" placeholder="0700xxxxxx" required name="phonenumber" id="phonenumber">
        @if ($errors->has('phonenumber'))
            <span class="help-block">
                <strong>{{ $errors->first('phonenumber') }}</strong>
            </span>
        @endif
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
      <!-- /. Phone -->
    </div>



    <div class="col-md-6">
       <!-- Location -->
<div class="row">

        <div class="col-sm-12">
        <div class="form-group has-feedback">
           <!-- Google Search here -->
           <label for="checkout-ln">Your Business / Personal Address</label>
           <p class="text-info"> <span style="color:red;">*</span>This will be used as a pick up location for your  products. </p>
              <div id="locationField">
              <input id="autocomplete" class="form-control" required placeholder="Start Typing to get Suggestions"
             onFocus="geolocate()" type="text"></input>
             <input class="field form-control" type="hidden" id="street_number"
              disabled="true"></input>
              <input class="form-control" type="hidden" class="field" id="route"
              disabled="true"></input>
              <input class="field form-control" type="hidden" id="locality"
              disabled="true"></input>
              <input class="field form-control" type="hidden" id="postal_code"
              disabled="true"></input>
           
              </div>
          </div>

      <!-- Location  -->
      

      <!-- Password-->
      <div class="form-group has-feedback">
      <label>Password</label>
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
      <label>Password Confirm</label>
        <input type="password" class="form-control" required placeholder="Retype password" name="password_confirmation" id="password-confirm">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <!-- /. Password confirm -->


      <div class="row">
        <div class="col-xs-12">
          <div class="checkbox icheck">
            <label> </label>
              <input type="checkbox" id="seller_terms" checked> I agree to the <a href="#">terms</a>
            
          </div>
        </div>

        <!-- /.col -->
<<<<<<< HEAD
        <div class="col-xs-6 badding-tp-2x">
          <button type="submit" class="btn btn-primary btn-block btn-flat" style="border-radius:10px;">Register Me</button>
        </div>
=======
        
>>>>>>> 795068995fb16fdd52cd322e708844c0adc5bacd
        <!-- /.col -->
      </div>
  </div>

  </div><!-- Row-->
<<<<<<< HEAD
    </form>
    <a href="/seller-login" class="text-center">I'm already a seller?</a></br>
    <div>
    <a href="/" class="btn btn primary" style="background-color : #e6e7e9; border-radius:20px;">Buy on Sproos</a>
    </div>
=======
    
    
>>>>>>> 795068995fb16fdd52cd322e708844c0adc5bacd
  </div>
<div class="col-md-6 col-md-offset-6">
          <button type="submit" class="btn btn-primary ">Register Me</button>
        </div>
  </form>
  <p>
  <a href="/seller-login" class="text-center">I'm already a seller?</a></br>
  </p>

  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZSJPcHGJJY7d5oaxbq7FYvkjaBLBM-k4&libraries=places&callback=initAutocomplete"
        async defer></script>

<!-- Bootstrap 3.3.7 -->

<!-- iCheck -->
<script src=" {{ asset('plugins/iCheck/icheck.min.js' )}}"></script>
<script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['establishment']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
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