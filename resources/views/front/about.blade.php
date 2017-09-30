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
                
                <nav class="list-group">
                    
                    <a class="list-group-item active" href="#">About Us</a>
                    <a class="list-group-item" href="/faq">Frequently Asked Questions</a>
                    <a class="list-group-item" href="/account">My Account</a>
                    <a class="list-group-item" href="#seller-guide">Seller Guide</a>
                    <a class="list-group-item" href="#">Contact us</a>
                </nav>
            </div>
            <div class="col-md-9">
                <p class="lead">
                Sproos is an independent online market place aimed at providing a platform for buyers and sellers of
                fashion related products in East Africa.
                Sproos supports local designers, artists and small businesses involved in the fashion value chain by
                providing access to a wider audience of buyers who would have otherwise been expensive to access
                through extensive distribution and/or costly marketing campaigns.
                </p>

                <div>                

                <div class="margin-top-2x">
                <h6 class="text-muted text-normal text-uppercase" id="seller-guide">Sproos Sellers’ Guide:</h6>
                <p>A few tips for successfully selling on Sproos:</p>
                <hr class="margin-bottom-1x">
                <dl>
                  <dt> Photography</dt>
                  <dd><b>Lighting:</b><br> Find a way to use natural light. Set up your shot near a window (or near a white wall if it reflects
                    enough window light).
                    <ul>

                        <li>If you can’t use natural light, be sure to use the white balance function on your camera.</li>
                        <li>You can also use image editing software to clean up your photos after the fact.</li>
                        <li>Keep your backgrounds as simple as possible.</li>
                        <li>If your work table doesn’t look good but it’s the only place you can set up, cover the surface with some
                        tablecloths.</li>
                    </ul>
                </dd>

                  <dt>Delivery</dt>
                    <dl>
                    <ul>
                        <li>We have partnered with preferred couriers who will offer <b>DISCOUNTED</b> rates on deliveries.</li>
                    <li>Once order has been completed, Sproos will handle the delivery process. You will be contacted by a rider
                    for directions to pick up package, for delivery to buyer.</li>
                    <li>Once package has been delivered and accepted as satisfactory by buyer, confirmation will be received.
                    Payment will be effected 48 hours after confirmation by buyer.</li>
                    </ul>
                    </dl>

                  <dt>Returns and refunds</dt>
                  <dd>If a buyer is unsatisfied with your product, the product will be returned to you at your cost.</dd>

                  <dt>Fees</dt>
                    <dd>Sproos charges a fixed percentage of the transaction value which is 8% for each product sold.</dd>

                <dt>Make every transaction Memorable</dt>
                    <dd> "A happy customer is a bragging return customer" Provide excellent customer service and watch your
                    business grow. On our platform, the customer is always right. If you have any ISSUE with a customer,
                    contact the SPROOS team immediately and we will help resolve the issue.</dd>

                </dl>


              </div>

              <div>
                </div>

                <hr class="margin-bottom-1x">
                <div class="card text-center">
                    <div class="card-header"><span class="text-lg">Sellers</span></div>
                        <div class="card-block">
                            <h3 class="card-title">Register As a Seller Now! It's Simple</h3>
                            <p class="card-text text-lg">Register as a sproos seller and make money!Its Simple.</p><a class="btn btn-primary" href="/seller-register">Sign Up</a>
                        </div>
                    </div>
                </div>

            </div>

        </div><!-- Row -->
        
      </div>
      
@endsection
