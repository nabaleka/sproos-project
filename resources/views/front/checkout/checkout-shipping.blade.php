@extends('layouts.app')

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

    <div class="checkout-steps"><a href="/checkout-review">4. Review</a><a href="/checkout-payment"><!--span class="angle"></span-->3. Payment</a><a class="active" href="/checkout-shipping"><!--span class="angle"></span-->2. Shipping</a><a class="completed" href="/checkout-address"><!--span class="angle"></span--><span class="step-indicator icon-circle-check"></span>1. Address</a></div>

    <h4>Choose Shipping Method</h4>

    <hr class="padding-bottom-1x">

    <div class="table-responsive">

        <table class="table">

        <thead class="thead-default">

            <tr>

            <th>Shipping method</th>

            <th>Delivery time</th>

            <th>Handling fee</th>

            <th></th>

            </tr>

        </thead>

        <tbody>

            <tr>

            <td class="align-middle"><span class="text-medium">Courier</span><br><span class="text-muted text-sm">Anywhere</span></td>

            <td class="align-middle">2 - 5 days</td>

            <td class="align-middle"> Kshs. 2250 (Varies)</td>

            <td class="align-middle">

                <label class="custom-control custom-radio">

                <input class="custom-control-input" type="radio" name="shipping-method" checked><span class="custom-control-indicator"></span>

                </label>

            </td>

            

            <tr>

            <td class="align-middle"><span class="text-medium">Local Pickup from store</span><br><span class="text-muted text-sm">All Addresses(default zone)</span></td>

            <td class="align-middle">&mdash;</td>

            <td class="align-middle">Kshs. 1500.00</td>

            <td class="align-middle">

                <label class="custom-control custom-radio">

                <input class="custom-control-input" type="radio" name="shipping-method"><span class="custom-control-indicator"></span>

                </label>

            </td>

            </tr>

            <tr>

            <td class="align-middle"><span class="text-medium">Pick Up at Known Landmarks</span><br><span class="text-muted text-sm">East Africa Only!</span></td>

            <td class="align-middle">&mdash;</td>

            <td class="align-middle">Ksh. 2400</td>

            <td class="align-middle">

                <label class="custom-control custom-radio">

                <input class="custom-control-input" type="radio" name="shipping-method"><span class="custom-control-indicator"></span>

                </label>

            </td>

            </tr>

            

        </tbody>

        </table>

    </div>

    <div class="checkout-footer margin-top-1x">

        <div class="column"><a class="btn btn-outline-secondary" href="/checkout-address"><i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Back</span></a></div>

        <div class="column"><a class="btn btn-primary" href="/checkout-payment"><span class="hidden-xs-down">Continue&nbsp;</span><i class="icon-arrow-right"></i></a></div>

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

            <td class="text-medium">Kshs. {{Cart::total()}}</td>

            </tr>

            <tr>

            <td>Shipping:</td>

            <td class="text-medium">Select Shipping First</td>

            </tr>

            <tr>

            <td>Estimated tax:</td>

            <td class="text-medium">16 &amp; V.A.T ( {{ Cart::total()/0.16}} )</td>

            </tr>

            <tr>

            <td></td>

            <td class="text-lg text-medium">Kshs. {{ Cart::total() }}</td>

            </tr>

        </table>

        </section>

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




@endsection