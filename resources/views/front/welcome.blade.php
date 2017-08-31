
@extends('layouts.app')
@section('content')
      <!-- Main Slider-->
      <section class="hero-slider" style="min-height:100%;">
      <div>
        <img src="img/hero-slider/sproos-banner.png" style="width:100%;">
      </div>

      </section>
      <!-- Top Categories-->
      <section class="container padding-top-3x">
        <h3 class="text-center mb-30">Top Categories</h3>
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30"><a class="card-img-tiles" href="/shop-grid">
                <div class="inner">
                 
                </div></a>
              <div class="card-block text-center">
                <h4 class="card-title">Used</h4>
                <p class="text-muted">Starting from Ksh 100.00</p><a class="btn btn-outline-primary btn-sm" href="/shop-grid">View Products</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30"><a class="card-img-tiles" href="/shop-grid">
                <div class="inner">
                  
                </div></a>
              <div class="card-block text-center">
                <h4 class="card-title">Brand New</h4>
                <p class="text-muted">Starting from Ksh 956.00</p><a class="btn btn-outline-primary btn-sm" href="/shop-grid">View Products</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30"><a class="card-img-tiles" href="/shop-grid">
                <div class="inner">
                  <!--div class="main-img"><img src="img/shop/categories/07.jpg" alt="Category"></div>
                  <div class="thumblist"><img src="img/shop/categories/08.jpg" alt="Category"><img src="img/shop/categories/09.jpg" alt="Category"></div-->
                </div></a>
              <div class="card-block text-center">
                <h4 class="card-title">African</h4>
                <p class="text-muted">Starting from Ksh 927.00</p><a class="btn btn-outline-primary btn-sm" href="/shop-grid">View Products</a>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center"><a class="btn btn-outline-secondary margin-top-none" href="/categories">All Categories</a></div>
      </section>


      <!-- Check if there is a product -->
        @if(count($products) > 0)
           
      <!-- Featured Products Carousel-->
      <section class="container padding-top-3x padding-bottom-3x">
        <h3 class="text-center mb-30">Featured Products</h3>
        <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
      @foreach($products as $product)
        <!-- Loop through -->
    
          <div class="grid-item">
            <div class="product-card">
              <div class="product-badge text-danger"></div><a class="product-thumb" href="/shop-single/{{$product->id}}"><img href="/shop-single/{{$product->id}}" src="{{Storage::url($product->image)}}" height="100px" width="150px" /></a>
              <h3 class="product-title"><a href="/shop-single/{{$product->id}}">{{$product->name}}</a></h3>
              <h4 class="product-price">
                Ksh. {{$product->price}}
              </h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <a href="{{'/add-to-cart'}}/<?php echo $product->id?>" class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</a>
              </div>
            </div>
          </div>
          @endforeach

          <!-- Product-->
          @endif
      
          
        </div>
      </section>

          
    <!-- Services-->
    @include('inc.services')
    
    <!-- Product Widgets-->
    @include('inc.product-widget')
     
@endsection