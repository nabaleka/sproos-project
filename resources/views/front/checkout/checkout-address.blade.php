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
{{--
 @if(Auth::guest())
<h4>Your Email Address</h4>
    <hr class="padding-bottom-1x">

    <p>
        Lets check your email address.
    </p>
    <form action="" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <div class="col-sm-6">
            <div class="form-group">
                <label for="checkout-email">E-mail Address</label>
                <input class="form-control" placeholder="Your email Address" type="email" id="checkout-email" required="" name="email"  value="{{ old('email') }}">
            </div>
            </div>
            <div class="col-sm-6">
            <div class="column"><button type="submit" class="btn btn-primary"><span class="hidden-xs-down">Check &nbsp;</span><i class="icon-arrow-right"></i></button></div>
            </div>

    </form>
    <hr class="padding-bottom-1x">
@endif --}}

    
    
    <h4>Billing Address</h4>
    @include('includes.messages')
    <hr class="padding-bottom-1x">
    <form action="{{ route('checkout') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="row">
        <div class="col-sm-6">
        <div class="form-group">
            <label for="checkout-fn">First Name</label>
            <input class="form-control" type="text" id="checkout-fn" required="" name="firstName"  value="">
        </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group">
            <label for="checkout-ln">Last Name</label>
            <input class="form-control" type="text" id="checkout-ln" required="" name="lastName"  value="{{ old('lastName') }}">
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
        <div class="form-group">
            <label for="checkout-email">E-mail Address</label>
            <input class="form-control" type="email" id="checkout-email" required="" name="email"  value="">
        </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group">
            <label for="checkout-phone">Phone Number</label>
            <input class="form-control" type="text" id="checkout-phone" required="" name="phoneNumber"  value="{{ old('phoneNumber') }}">
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
        <div class="form-group"  value="{{ old('country') }}">
            <label for="checkout-country">County</label>
            <select class="form-control" id="checkout-country" name="country" >
            <option>Choose country</option>
            <option>Kenya</option>
            <option>Uganda</option>
            <option>Tanzania</option>
            </select>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
        <div class="form-group"   value="{{ old('city') }}">
            <label for="checkout-city">nearest City</label>
            <select class="form-control" id="checkout-city" name="city">
            <option>Choose city</option>
            <option>Nairobi</option>
            <option>Kisumu</option>
            <option>Mombasa</option>
           
            </select>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group">
            <label for="checkout-zip">Postal Code</label>
            <input class="form-control" type="text" id="checkout-zip"  value="{{ old('zipcode') }}" name="zipcode">
        </div>
        </div>
    </div>
    <div class="row padding-bottom-1x">
        <div class="col-sm-6">
        <div class="form-group">
            <label for="checkout-address1">Your Address</label>
            <input class="form-control" type="text" id="checkout-address1" name="address" required="" value="{{ old('address') }}">
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
            <td class="text-medium">KShs. {{Cart::subtotal() }}</td>
            </tr>
            <tr>
            <td>Shipping:</td>
            <td class="text-medium">Kshs. {{ Session::get('shipping_method')}}</td>
            </tr>
            <tr>
            <td>Estimated tax:</td>
            <td class="text-medium">KShs. {{Cart::subtotal() * 1.16 }}</td>
            </tr>
            <tr>
            <td></td>
            <td class="text-lg text-medium">KShs. {{Cart::total()+ Session::get('shipping_method')}} </td>
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

        </section>
    </aside>
    </div>
</div>
</div>

@endsection