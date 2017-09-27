@extends('layouts.checkout')

@section('content')

<!-- Page Title-->

<div class="page-title">

<div class="container">

    <div class="column">

    <h1>Checkout</h1>

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
        <a href="">4. Payment</a>
        <a href="" class="active"><!--span class="angle"></span-->3. Review</a>
        <a class="completed" href=""><span class="step-indicator icon-circle-check"></span>2. Shipping</a>
        <a class="completed" href=""><span class="step-indicator icon-circle-check"></span>1. Address</a>
    </div>

    <h4>Review Your Order</h4>

    <hr class="padding-bottom-1x">

    <div class="table-responsive shopping-cart">
     
        <div class="table-responsive shopping-cart">
          <table class="table">
            <thead>
              <tr>
                <th>Product Name</th>
                <th class="text-center">Quantity</th>
                <th class="text-center">Subtotal</th>
              </tr>
            </thead>
            <tbody>
            @foreach($cartItems as $cartItem)
              <tr>
                <td>
                 
                  <div class="product-item"><a class="product-thumb" href="/shop-single/{{$cartItem->id}}"><img src="{{ url('uploads/'.$cartItem->options->img) }}" height="100px" width="150px" /></a>
                    <div class="product-info">
                      <h4 class="product-title"><a href="/shop-single/{{$cartItem->id}}">Ksh{{$cartItem->price}}</a></h4><span><em>Size:</em> -</span><span><em>Color:</em> Turquoise</span>
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <div class="count-input">
                    <select class="form-control" name="quantity">
                      <option>{{$cartItem->qty}}</option>

                    </select>
                  </div>
                </td>
                <td class="text-center text-lg text-medium">Ksh{{Cart::subtotal()}}</td>
                
               
              </tr>
               @endforeach
            </tbody>
          </table>
        </div>
           

      

    </div>

    <div class="shopping-cart-footer">

        <div class="column"></div>

        <div class="column text-lg">Subtotal: <span class="text-medium">{{Cart::total()}}</span></div>

    </div>

    <div class="row padding-top-1x mt-3">

        <div class="col-sm-6">

        <h5>Shipping to:</h5>

        <ul class="list-unstyled">
             @if (Auth::guest())

            <li><span class="text-muted">Client:</span> </li>
            @else
            <li><span class="text-muted">Client:</span>{{Auth::user()->name}}</li>
            @endif

            <li><span class="text-muted">Address:</span>  </li>

            <li><span class="text-muted">Phone:</span> </li>

        </ul>

        </div>


    </div>

    <div class="checkout-footer margin-top-1x">

        <div class="column hidden-xs-down"><a class="btn btn-outline-secondary" href="/checkout-address"><i class="icon-arrow-left"></i>&nbsp;Back</a></div>

        <div class="column"><a class="btn btn-primary" href="/checkout-payment">Continue to Payment</a></div>

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
                    <td class="text-medium"></td>
                  </tr>
                  <tr>
                    <td>Estimated tax:</td>
                    <td class="text-medium">{{Cart::tax()}}</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td class="text-lg text-medium">{{Cart::total()}}</td>
                  </tr>
                </table>
              </section>

        <section class="widget widget-featured-products">

        <h3 class="widget-title">You might be interested</h3>

        

        

        <!-- Entry-->

        <div class="entry">

            <div class="entry-thumb"><a href="shop-list"><img src="img/shop/widget/04.jpg" alt="Product"></a></div>

            <div class="entry-content">

            <h4 class="entry-title"><a href="shop-list">Clothes</a></h4><span class="entry-meta">Fashion</span>

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