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
<<<<<<< HEAD
    <form action="/shipping" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="row">
=======
    <form action="/checkout-shipping" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="row">
        <div class="col-sm-6">
        <div><!---Map-->
     <div id="locationField">
      <input id="autocomplete" placeholder="Enter your address"
             onFocus="geolocate()" type="text"></input>
    </div>

    <table class="table-responsive" id="address">
      <tr>
        <td class="label">Street address</td>
        <td class="slimField"><input class="field" id="street_number"
              disabled="true"></input></td>
        <td class="wideField" colspan="2"><input class="field" id="route"
              disabled="true"></input></td>
      </tr>
      <tr>
        <td class="label">City</td>
        <!-- Note: Selection of address components in this example is typical.
             You may need to adjust it for the locations relevant to your app. See
             https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform
        -->
        <td class="wideField" colspan="3"><input class="field" id="locality"
              disabled="true"></input></td>
      </tr>
      <tr>
        <td class="label">State</td>
        <td class="slimField"><input class="field"
              id="administrative_area_level_1" disabled="true"></input></td>
        <td class="label">Zip code</td>
        <td class="wideField"><input class="field" id="postal_code"
              disabled="true"></input></td>
      </tr>
      <tr>
        <td class="label">Country</td>
        <td class="wideField" colspan="3"><input class="field"
              id="country" disabled="true"></input></td>
      </tr>
    </table>

    <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['establishment']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
>>>>>>> 8e3658b392682193ad9041fb71cdffea046619d9

        <div class="col-sm-6">
        <div class="form-group">
            <label for="checkout-fn">Delivery Date</label>
            <input class="form-control" type="text" id="checkout-date" required="" name="deliveryDate"  placeholder="TODAY">
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
<<<<<<< HEAD
        <input class="form-control" type="text" id="checkout-phone" required="" name="phoneNumber"  value="{{$phoneNumber}}" readOnly>
=======
            <input class="form-control" type="text" id="checkout-phone" required="" name="phoneNumber"  placeholder="0710000001">
>>>>>>> 8e3658b392682193ad9041fb71cdffea046619d9
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
<<<<<<< HEAD
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
=======
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
>>>>>>> 8e3658b392682193ad9041fb71cdffea046619d9
                  </tr>
                </table>
              </section>
    </aside>
    </div>
</div>

@endsection