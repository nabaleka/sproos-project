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
        <li><a href="shop-grid">Buy</a>
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
    <div class="checkout-steps"><a href="/checkout-review">4. Review</a><a href="/checkout-payment"><!--span class="angle"></span-->3. Payment</a><a href="/checkout-shipping"><!--span class="angle"></span-->2. Shipping</a><a class="active" href="/checkout-address"><!--span class="angle"></span-->1. Address</a></div>


    
    
    <h4>Billing Address</h4>
    @include('includes.messages')
    <hr class="padding-bottom-1x">
    <form action="{{ route('checkout') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="row">
        <div class="col-sm-6">
        <div class="form-group">
            <label for="checkout-fn">Delivery Date</label>
            <input class="form-control" type="text" id="checkout-date" required="" name="deliveryDate"  placeholder="TODAY">
        </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group">
            <label for="checkout-ln">Delivery Time</label>
            <input class="form-control" type="text" id="checkout-time" required="" name="deliveryTime"  placeholder="-Select-Time-">
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
        <div class="form-group">
            <label for="checkout-email">Delivery Instructions</label>
            <input class="form-control" type="text" id="checkout-instructions" required="" name="deliveryInstructions"  placeholder="e.g Call me when you arrive">
        </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group">
            <label for="checkout-phone">Phone Number</label>
            <input class="form-control" type="text" id="checkout-phone" required="" name="phoneNumber"  placeholder="0710000001">
        </div>
        </div>
    </div>
    
    <h4>Shipping Address</h4>
    <hr class="padding-bottom-1x">
    <div class="form-group">
        <label class="custom-control custom-checkbox">
        <input class="custom-control-input" type="checkbox" checked><span class="custom-control-indicator"></span><span class="custom-control-description">Same as billing address</span>
        </label>
    </div>
    <div class="checkout-footer">
        <div class="column"><a class="btn btn-outline-secondary" href="/cart"><i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Back To Cart</span></a></div>
        <div class="column"><button type="submit" class="btn btn-primary"><span class="hidden-xs-down">Continue&nbsp;</span><i class="icon-arrow-right"></i></button></div>
    </div>
    </div>
    </form>
    <!-- Sidebar  
            -->
            
    <div class="col-xl-3 col-lg-4">
    <aside class="sidebar">
        <div class="padding-top-2x hidden-lg-up"></div>
        <!-- Order Summary Widget-->

        </section>
    </aside>
    </div>
</div>
</div>

@endsection