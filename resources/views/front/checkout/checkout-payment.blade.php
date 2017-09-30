@extends('layouts.checkout')

@section('content')

<!-- Page Title-->

<div class="page-title">

<div class="container">

    <div class="column">

    <h1>Checkout</h1>

    </div>
     <div style="color: red">
   @if (Session::has('message'))
        <li>{!! session('message') !!}</li>
   @endif
   </div>
    <div class="column">

    <ul class="breadcrumbs">

        <li><a href="/">Home</a>

        </li>

        <li class="separator">&nbsp;</li>

        <li>Checkout</li>

    </ul>

    </div>

</div>

</div>

<!-- Page Content-->

<div class="container padding-bottom-3x mb-2">

<div class="row">

    <!-- Checkout Adress-->

    <div class="col-xl-9 col-lg-8">

    <div class="checkout-steps">
        <a href="" class="active">4. Payment</a>
        <a class="completed" href=""><span class="step-indicator icon-circle-check"></span>1. Review</a>
        <a class="completed" href=""><span class="step-indicator icon-circle-check"></span>1. Address</a>
        <a class="completed" href=""><span class="step-indicator icon-circle-check"></span>1. Shipping</a>
    </div>

    <h4>Choose Payment Method</h4>

    <hr class="padding-bottom-1x">

    <div class="accordion" id="accordion" role="tablist">

        <!--div class="card">

        <div class="card-header" role="tab">

            <h6><a href="#card" data-toggle="collapse" data-parent="#accordion"><i class="icon-columns"></i>Pay with Credit Card</a></h6>

        </div>

        <div class="collapse show" id="card" role="tabpanel">

            <div class="card-block">

            <p>We accept following credit cards:&nbsp;<img class="d-inline-block align-middle" src="img/credit-cards.png" style="width: 120px;" alt="Cerdit Cards"></p>

            <div class="card-wrapper"></div>

            <form class="interactive-credit-card row">

                <div class="form-group col-sm-6">

                <input class="form-control" type="text" name="number" placeholder="Card Number" required>

                </div>

                <div class="form-group col-sm-6">

                <input class="form-control" type="text" name="name" placeholder="Full Name" required>

                </div>

                <div class="form-group col-sm-3">

                <input class="form-control" type="text" name="expiry" placeholder="MM/YY" required>

                </div>

                <div class="form-group col-sm-3">

                <input class="form-control" type="text" name="cvc" placeholder="CVC" required>

                </div>

                <div class="col-sm-6">

                <button class="btn btn-outline-primary btn-block margin-top-none" type="submit">Submit</button>

                </div>

            </form>

            </div>

        </div>

        </div-->


<!-- Paypal -->
        <div class="card">

        <div class="card-header" role="tab">

            <h6><a class="collapsed" href="#paypal" data-toggle="collapse" data-parent="#accordion"><i class="socicon-paypal"></i>Pay with PayPal</a></h6>

        </div>

        <div class="collapse" id="paypal" role="tabpanel">

            <div class="card-block">
    <a href="/paypalconfirmation" class="btn btn-primary">PAYPAL </a>
           
           

            </div>

        </div>

        </div>

<!-- Pesapal -->  
        <div class="card">

        <div class="card-header" role="tab">

            <h6><a class="collapsed" href="#pesapal" data-toggle="collapse" data-parent="#accordion"><i class="socicon-paypal"></i>Pay with PesaPal</a></h6>

        </div>

        <div class="collapse" id="pesapal" role="tabpanel">

            <div class="card-block">

            <p>Pesapal - Payments</p>
           <?php 
             echo $iframe;
           ?>
           

            </div>

        </div>

        </div>
      


    </div>

    <div class="checkout-footer margin-top-1x">

        <div class="column"><a class="btn btn-outline-secondary" href="/checkout-shipping"><i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Back</span></a></div>

        <div class="column"><a class="btn btn-primary" href="/checkout-review"><span class="hidden-xs-down">Continue&nbsp;</span><i class="icon-arrow-right"></i></a></div>

    </div>

    </div>

    <!-- Sidebar          -->

    <div class="col-xl-3 col-lg-4">

    <aside class="sidebar">

        <div class="padding-top-2x hidden-lg-up"></div>

       <!-- Order Summary Widget-->
              <section class="widget widget-order-summary">
                <h3 class="widget-title">Order Summary</h3>
                <table class="table">
                  <tr>
                    <td>Cart Subtotal:</td>
                    <td class="text-medium">{{Cart::subtotal()}}</td>
                  </tr>
                  <tr>
                    <td>Shipping:</td>
                    <td class="text-medium"><?php
                     echo session()->get('shipping');
                    
                     ?>
       </td>
                  </tr>
                  <tr>
                    <td>Estimated tax:</td>
                    <td class="text-medium">{{Cart::tax()}}</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td class="text-lg text-medium"><?php
                     $total_amount=str_replace(",", "", Cart::total());
                     $total_cost= $total_amount+session()->get('shipping');
                     echo $total_cost;
                     ?></td>
                  </tr>
                </table>
              </section>

        <section class="widget widget-featured-products">

        <h3 class="widget-title">You might be interested</h3>

        <!-- Entry-->

        <div class="entry">

            <div class="entry-thumb"><a href="#"><img src="img/shop/widget/01.jpg" alt="Product"></a></div>

            <div class="entry-content">

            <h4 class="entry-title"><a href="#">Oakley Kickback</a></h4><span class="entry-meta">Ksh. 155.00</span>

            </div>

        </div>



        </section>

        <!-- Promo Banner-->

        <!--section class="promo-box" style="background-image: url(img/banners/02.jpg);"><span class="overlay-dark" style="opacity: .4;"></span>

        <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">

            <h4 class="text-light text-thin text-shadow">New Collection of</h4>

            <h3 class="text-bold text-light text-shadow">Sunglasses</h3><a class="btn btn-outline-white btn-sm" href="shop-grid-ls.html">Shop Now</a>

        </div>

        </section-->

    </aside>

    </div>

</div>

</div>


@endsection