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

        <li>Checkout Shipping</li>

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
        <a href="/checkout-review">3. Review</a>
        <a href="/checkout-payment"><!--span class="angle"></span-->2. Payment</a>
        <a class="active" href="/checkout-shipping"><!--span class="angle"></span-->1. Shipping</a>
        </div>

    <h4>Choose Shipping Method</h4>

    <hr class="padding-bottom-1x">

    <form>
    <div class="row">
        <div class="col-sm-6">
        <div class="form-group">
            <label for="checkout-fn">Label</label>
            <input class="form-control" type="text" id="checkout-date" required="" name="deliveryDate"  placeholder="TODAY">
        </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group">
        <label for="checkout-fn">Type of Location</label>
        <div class="col-sm-6">
        <label class="custom-control custom-checkbox">
        <input class="custom-control-input" name="location" type="radio" checked><span class="custom-control-indicator"></span><span class="custom-control-description"><b>Residential</b></span>
        </label>
        </br>
        <label class="custom-control custom-checkbox">
        <input class="custom-control-input" name="location" type="radio" checked><span class="custom-control-indicator"></span><span class="custom-control-description"><b>Business</b></span>
        </label></div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
        <div class="form-group">
            <label for="checkout-email">Estate/Building:</label>
            <input class="form-control" type="text" id="checkout-instructions" required="" name="deliveryInstructions"  placeholder="e.g Call me when you arrive">
        </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group">
            <label for="checkout-phone">Room/House/Suite No:</label>
            <input class="form-control" type="text" id="checkout-phone" required="" name="phoneNumber"  placeholder="0710000001">
        </div>
        </div>
    </div>
    
    </form>

    </div>

    <!-- Sidebar          -->

    <div class="col-xl-3 col-lg-4">

    <aside class="sidebar">

        <div class="padding-top-2x hidden-lg-up"></div>

        <!-- Order Summary Widget-->

        @foreach($cartItems as $cartItem)
        <section class="widget widget-order-summary">
        <h3 class="widget-title">Order Summary</h3>
        <table class="table">
            <tr>
            <td>Cart sub total:</td>
            <td class="text-medium">KShs. <?php echo $cartItem->price ?></td>
            </tr>
            <tr>
            <td>Shipping:</td>
            <td class="text-medium">Kshs. {{ Session::get('shipping_method')}}</td>
            </tr>
            <tr>
            <td>Estimated tax:</td>
            <td class="text-medium">KShs. {{Cart::tax()}}</td>
            </tr>
            <tr>
            <td></td>
            <td class="text-lg text-medium">KShs. {{$cartItem->total}} </td>
            </tr>
        </table>
        </section>
        <!-- Featured Products Widget-->
        <section class="widget widget-featured-products">
        <h3 class="widget-title">You Might be Interested</h3>
        <!-- Entry-->
        <div class="entry">
            <div class="entry-thumb"><a href="#"><img src="img/shop/widget/01.jpg" alt="Product"></a></div>
            <div class="entry-content">
            <h4 class="entry-title"><a href="#"></a></h4><span class="entry-meta">Ksh. 155.00</span>
            </div>
        </div>
@endforeach

        <!-- Featured Products Widget-->

        <section class="widget widget-featured-products">

        <h3 class="widget-title">More Products for you! </h3>


        <!-- Entry-->

        <div class="entry">

            <div class="entry-thumb"><a href="shop-grid"><img src="img/shop/widget/02.jpg" alt="Product"></a></div>

            <div class="entry-content">

            <h4 class="entry-title"><a href="shop-list">Top-Sider Fathom</a></h4><span class="entry-meta">Ksh. 90.00</span>

            </div>

        </div>

        <!-- Entry-->

        <div class="entry">

            <div class="entry-thumb"><a href="shop-list"><img src="img/shop/widget/03.jpg" alt="Product"></a></div>

            <div class="entry-content">

            <h4 class="entry-title"><a href="shop-single.html">Vented Straw Fedora</a></h4><span class="entry-meta">Ksh. 49.50</span>

            </div>

        </div>

        <!-- Entry-->

        <div class="entry">

            <div class="entry-thumb"><a href="shop-single.html"><img src="img/shop/widget/04.jpg" alt="Product"></a></div>

            <div class="entry-content">

            <h4 class="entry-title"><a href="shop-single.html">Big Wordmark Tote</a></h4><span class="entry-meta">Ksh. 29.99</span>

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



<sctipt src="{{asset('js/sendy_api_button_v1.js')}}"></script>
@endsection