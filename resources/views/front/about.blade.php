@extends('layouts.app')
@section('content')

<!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>About Sproos</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="/">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>About Sproos</li>
              <li class="separator">&nbsp;</li>
              <li ><a href="/shop-list">Shop</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-3x padding-top-3px">

        <div class="row">
            <div class="col-md-3">
                <hr class="margin-bottom-1x">
                <ul class="list-group">
                  <li class="list-group-item">About Us</li>
                  <li class="list-group-item"><a href="/faq">FAQs</a></li>
                  <li class="list-group-item"><a href="/account-profile">Account</a></li>
                </ul>
            </div>
            <div class="col-md-9">
                <h1>About Sproos</h1>
                <hr class="hr-light mt-2 margin-bottom-2x">
                <p>
                Sproos is an independent online market place aimed at providing a platform for buyers and sellers of
                fashion related products in East Africa.
                Sproos supports local designers, artists and small businesses involved in the fashion value chain by
                providing access to a wider audience of buyers who would have otherwise been expensive to access
                through extensive distribution and/or costly marketing campaigns.
                </p>

                <div>
                <hr class="margin-bottom-1x">
                <div class="card text-center">
                    <div class="card-header"><span class="text-lg">Sellers</span></div>
                        <div class="card-block">
                            <h3 class="card-title">Register Now! It's Simple</h3>
                            <p class="card-text">Register as a sproos seller and make money!Its Simple.</p><a class="btn btn-primary" href="/seller-register">Sign Up</a>
                        </div>
                    </div>
                </div>

            </div>

        </div><!-- Row -->
        
      </div>
      
@endsection
