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
        <li><a href="index.html">Home</a>
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
    <div class="checkout-steps"><a class="active" href="/checkout-review">4. Review</a><a class="completed" href="/checkout-payment"><span class="step-indicator icon-circle-check"></span><!--span class="angle"></span-->3. Payment</a><a class="completed" href="/checkout-shipping"><span class="step-indicator icon-circle-check"></span><!--span class="angle"></span-->2. Shipping</a><a class="completed" href="/checkout-address"><span class="step-indicator icon-circle-check"></span><!--span class="angle"></span-->1. Address</a></div>
    <h4>Review Your Order</h4>
    <hr class="padding-bottom-1x">
    <div class="table-responsive shopping-cart">
        <table class="table">
        <thead>
            <tr>
            <th>Product Name</th>
            <th class="text-center">Subtotal</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>
                <div class="product-item"><a class="product-thumb" href="shop-single.html"><img src="img/shop/cart/01.jpg" alt="Product"></a>
                <div class="product-info">
                    <h4 class="product-title"><a href="shop-single.html">Unionbay Park<small>x 1</small></a></h4><span><em>Size:</em> 10.5</span><span><em>Color:</em> Dark Blue</span>
                </div>
                </div>
            </td>
            <td class="text-center text-lg text-medium">$43.90</td>
            <td class="text-center"><a class="btn btn-outline-primary btn-sm" href="cart.html">Edit</a></td>
            </tr>
            <tr>
            <td>
                <div class="product-item"><a class="product-thumb" href="shop-single.html"><img src="img/shop/cart/02.jpg" alt="Product"></a>
                <div class="product-info">
                    <h4 class="product-title"><a href="shop-single.html">Daily Fabric Cap<small>x 2</small></a></h4><span><em>Size:</em> XL</span><span><em>Color:</em> Black</span>
                </div>
                </div>
            </td>
            <td class="text-center text-lg text-medium">$24.89</td>
            <td class="text-center"><a class="btn btn-outline-primary btn-sm" href="cart.html">Edit</a></td>
            </tr>
            <tr>
            <td>
                <div class="product-item"><a class="product-thumb" href="shop-single.html"><img src="img/shop/cart/03.jpg" alt="Product"></a>
                <div class="product-info">
                    <h4 class="product-title"><a href="shop-single.html">Cole Haan Crossbody<small>x 1</small></a></h4><span><em>Size:</em> -</span><span><em>Color:</em> Turquoise</span>
                </div>
                </div>
            </td>
            <td class="text-center text-lg text-medium">$200.00</td>
            <td class="text-center"><a class="btn btn-outline-primary btn-sm" href="cart.html">Edit</a></td>
            </tr>
        </tbody>
        </table>
    </div>
    <div class="shopping-cart-footer">
        <div class="column"></div>
        <div class="column text-lg">Subtotal: <span class="text-medium">$289.68</span></div>
    </div>
    <div class="row padding-top-1x mt-3">
        <div class="col-sm-6">
        <h5>Shipping to:</h5>
        <ul class="list-unstyled">
            <li><span class="text-muted">Client:</span>Daniel Adams</li>
            <li><span class="text-muted">Address:</span>44 Shirley Ave. West Chicago, IL 60185, USA</li>
            <li><span class="text-muted">Phone:</span>+1(808) 764 554 330</li>
        </ul>
        </div>
        <div class="col-sm-6">
        <h5>Payment method:</h5>
        <ul class="list-unstyled">
            <li><span class="text-muted">Credit Card:</span>**** **** **** 5300</li>
        </ul>
        </div>
    </div>
    <div class="checkout-footer margin-top-1x">
        <div class="column hidden-xs-down"><a class="btn btn-outline-secondary" href="/checkout-payment"><i class="icon-arrow-left"></i>&nbsp;Back</a></div>
        <div class="column"><a class="btn btn-primary" href="/checkout-complete">Complete Order</a></div>
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
            <td class="text-medium">$289.68</td>
            </tr>
            <tr>
            <td>Shipping:</td>
            <td class="text-medium">$22.50</td>
            </tr>
            <tr>
            <td>Estimated tax:</td>
            <td class="text-medium">$3.42</td>
            </tr>
            <tr>
            <td></td>
            <td class="text-lg text-medium">$315.60</td>
            </tr>
        </table>
        </section>
        <!-- Featured Products Widget-->
        <section class="widget widget-featured-products">
        <h3 class="widget-title">Recently Viewed</h3>
        <!-- Entry-->
        <div class="entry">
            <div class="entry-thumb"><a href="shop-single.html"><img src="img/shop/widget/01.jpg" alt="Product"></a></div>
            <div class="entry-content">
            <h4 class="entry-title"><a href="shop-single.html">Oakley Kickback</a></h4><span class="entry-meta">$155.00</span>
            </div>
        </div>
        <!-- Entry-->
        <div class="entry">
            <div class="entry-thumb"><a href="shop-single.html"><img src="img/shop/widget/02.jpg" alt="Product"></a></div>
            <div class="entry-content">
            <h4 class="entry-title"><a href="shop-single.html">Top-Sider Fathom</a></h4><span class="entry-meta">$90.00</span>
            </div>
        </div>
        <!-- Entry-->
        <div class="entry">
            <div class="entry-thumb"><a href="shop-single.html"><img src="img/shop/widget/03.jpg" alt="Product"></a></div>
            <div class="entry-content">
            <h4 class="entry-title"><a href="shop-single.html">Vented Straw Fedora</a></h4><span class="entry-meta">$49.50</span>
            </div>
        </div>
        <!-- Entry-->
        <div class="entry">
            <div class="entry-thumb"><a href="shop-single.html"><img src="img/shop/widget/04.jpg" alt="Product"></a></div>
            <div class="entry-content">
            <h4 class="entry-title"><a href="shop-single.html">Big Wordmark Tote</a></h4><span class="entry-meta">$29.99</span>
            </div>
        </div>
        </section>
        <!-- Promo Banner-->
        <section class="promo-box" style="background-image: url(img/banners/02.jpg);"><span class="overlay-dark" style="opacity: .4;"></span>
        <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
            <h4 class="text-light text-thin text-shadow">New Collection of</h4>
            <h3 class="text-bold text-light text-shadow">Sunglasses</h3><a class="btn btn-outline-white btn-sm" href="shop-grid-ls.html">Shop Now</a>
        </div>
        </section>
    </aside>
    </div>
</div>
</div>
@include('inc.footer')
@endsection