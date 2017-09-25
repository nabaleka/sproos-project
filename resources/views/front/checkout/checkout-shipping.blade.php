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

    <div class="checkout-steps">
        <a href="/checkout-review">4. Payment</a>
        <a href="/checkout-payment"><!--span class="angle"></span-->3. Review</a>
        <a href="/checkout-shipping"><!--span class="angle"></span-->2. Address</a>
        <a class="active" href="/checkout-address"><!--span class="angle"></span-->1. Shipping</a>
    </div>


    
    
    <h4>Shipping Instructions</h4>
    @include('includes.messages')
    <hr class="padding-bottom-1x">
    <form action="/shipping" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="row">
        <div class="col-sm-6">
        
        <div><!---Map-->

        <div class="col-sm-6">
        <div class="form-group">
            <label for="checkout-fn">Delivery Date</label>
            <input class="form-control" type="text" id="datepicker" required="" name="deliveryDate"  placeholder="TODAY">
        </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group">
            <label for="checkout-ln">Delivery Time</label>
            <input class="form-control" type="text" id="checkout-time" required="" name="deliveryTime"  placeholder="eg. 9:30 am">
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
        <div class="form-group">
            <label for="checkout-email">Delivery Instructions</label>
            <textarea class="form-control" type="text" id="checkout-instructions" required="" name="deliveryInstructions">e.g Call me when you arrive</textarea>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group">
            <label for="checkout-phone">Phone Number</label>
        <input class="form-control" type="text" id="checkout-phone" required="" name="phoneNumber"  value="{{$phoneNumber}}" readOnly>
        </div>
        </div>
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
     <!-- Sidebar          -->
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
    </aside>
    </div>
</div>

@endsection