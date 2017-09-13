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

<<<<<<< HEAD
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
=======
    <div class="table-responsive">

        <table class="table">

        <thead class="thead-default">

            <tr>

            <th>Shipping method</th>

            <th>--</th>

            <th>--</th>

            <th></th>

            </tr>

        </thead>

        <tbody>

           

            <tr>

            <td class="align-middle"><span class="text-medium">
        <div id="locationField">
      <input id="autocomplete" placeholder="Enter your address"
             onFocus="geolocate()" type="text"></input>
    </div>

    <table id="address">
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

            </span><br><span class="text-muted text-sm">East Africa Only!</span></td>

            <td class="align-middle">&mdash;</td>

            <td class="align-middle">&mdash;</td>

            <td class="align-middle">

                <label class="custom-control custom-radio">

                <input class="custom-control-input" type="radio" name="shipping" value="2,400.00" ><span class="custom-control-indicator"></span>

                </label>

            </td>

            </tr>

            

        </tbody>

        </table>

>>>>>>> 0bce14981290e701b0dd50f8ceb91b94b0911c47
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
            {types: ['geocode']});

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
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBo0hz10vBq95hKsbXoW8nP-0lWxOwIxmM&libraries=places"></script>

@endsection