     @extends('layouts.app')
@section('content')
     <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>About Us</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index.html">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>About Us</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-2x mb-2">
        <div class="row align-items-center padding-bottom-2x">
          <div class="col-md-5"><img class="d-block w-270 m-auto" src="img/features/01.jpg" alt="Online Shopping"></div>
          <div class="col-md-7 text-md-left text-center">
            <div class="mt-30 hidden-md-up"></div>
            <h2>What Spross is all about</h2>
            <p>Sproos is an independent online market place aimed at providing a platform for buyers and sellers of fashion related products in East Africa. 
Sproos supports local designers, artists and small businesses involved in the fashion value chain by providing access to a wider audience of buyers who would have otherwise been expensive to access through extensive distribution and/or costly marketing campaigns.
</p>
          </div>
        </div>
        <hr>
        <div class="row align-items-center padding-top-2x padding-bottom-2x">
          <div class="col-md-5 push-md-7"><img class="d-block w-270 m-auto" src="img/features/02.jpg" alt="Delivery"></div>
          <div class="col-md-7 pull-md-5 text-md-left text-center">
            <div class="mt-30 hidden-md-up"></div>
            <h2>Fast Delivery Countrywide.</h2>
            <p>Sproos promises to provide you with the best shopping experience. We assure you that all due precautions are taken so that your package is delivered to you intact and on time by our delivery partner. Just proceed with your order and we’ll do the rest.</p>
          </div>
        </div>
        <hr>
        <div class="row align-items-center padding-top-2x padding-bottom-2x">
          <div class="col-md-5"><img class="d-block w-270 m-auto" src="img/features/03.jpg" alt="Mobile App"></div>
          <div class="col-md-7 text-md-left text-center">
            <div class="mt-30 hidden-md-up"></div>
            <h2>Great Mobile App. Shop On The Go.</h2>
            <p class="mb-4">Get access to all exclusive offers, discounts and deals!</p><a class="market-button apple-button" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">App Store</span></a><a class="market-button google-button" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Google Play</span></a><a class="market-button windows-button" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Windows Store</span></a>
          </div>
        </div>
        <hr>
        
        <hr>
        <div class="text-center padding-top-3x mb-30">
          <h2>Our Core Team</h2>
          <p class="text-muted">People behind your awesome shopping experience.</p>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6 mb-30 text-center"><img class="d-block w-150 mx-auto img-thumbnail rounded-circle mb-2" src="img/team/m.jpg" alt="Team">
            <h6>Mr. CEO</h6>
            <p class="text-muted mb-2">Founder, CEO</p>
            <div class="social-bar"><a class="social-button shape-circle sb-facebook" href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter" href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-google-plus" href="#" data-toggle="tooltip" data-placement="top" title="Google +"><i class="socicon-googleplus"></i></a></div>
          </div>
          <div class="col-md-3 col-sm-6 mb-30 text-center"><img class="d-block w-150 mx-auto img-thumbnail rounded-circle mb-2" src="img/team/m.jpg" alt="Team">
            <h6>Mr. Finance</h6>
            <p class="text-muted mb-2">Financial Director</p>
            <div class="social-bar"><a class="social-button shape-circle sb-skype" href="#" data-toggle="tooltip" data-placement="top" title="Skype"><i class="socicon-skype"></i></a><a class="social-button shape-circle sb-facebook" href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-paypal" href="#" data-toggle="tooltip" data-placement="top" title="PayPal"><i class="socicon-paypal"></i></a></div>
          </div>
          <div class="col-md-3 col-sm-6 mb-30 text-center"><img class="d-block w-150 mx-auto img-thumbnail rounded-circle mb-2" src="img/team/fm.jpg" alt="Team">
            <h6>Mrs. Director</h6>
            <p class="text-muted mb-2">Marketing Director</p>
            <div class="social-bar"><a class="social-button shape-circle sb-twitter" href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-google-plus" href="#" data-toggle="tooltip" data-placement="top" title="Google +"><i class="socicon-googleplus"></i></a><a class="social-button shape-circle sb-email" href="#" data-toggle="tooltip" data-placement="top" title="Email"><i class="socicon-mail"></i></a></div>
          </div>
          <div class="col-md-3 col-sm-6 mb-30 text-center"><img class="d-block w-150 mx-auto img-thumbnail rounded-circle mb-2" src="img/team/fm.jpg" alt="Team">
            <h6>Mrs. Designer</h6>
            <p class="text-muted mb-2">Lead Designer</p>
            <div class="social-bar"><a class="social-button shape-circle sb-behance" href="#" data-toggle="tooltip" data-placement="top" title="Behance"><i class="socicon-behance"></i></a><a class="social-button shape-circle sb-dribbble" href="#" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="socicon-dribbble"></i></a><a class="social-button shape-circle sb-instagram" href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="socicon-instagram"></i></a></div>
          </div>
        </div>
      </div>
         @include('inc.footer')
@endsection