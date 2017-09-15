@extends('layouts.theme')
@section('content')
<!-- Main Slider-->
<!--check banner 
the first image

-->
      <section class="hero-slider" style="min-height:100%;">
      <div>
<div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: false, &quot;autoplay&quot;: true, &quot;loop&quot;: true }">
@if(count($banner)>0)
@foreach($banner as $banners)
<img src="{{ asset('uploads/'.$banners->banner)}}" alt="Image">
@endforeach
@else
<img src="{{ asset('uploads/banners/banner.jpg')}}" alt="Image">
@endif
</div>
      </div>

      </section>


      <!-- Top Categories-->
      <section class="container padding-top-1x">
        <h3 class="text-center padding-top-2x padding-bottom-1x mb-30" style="border-bottom:#ee2956 2px solid; max-width:50%; margin:auto auto;">Our Categories</h3>
        <div class="row">

          <!-- Load categories dynamically-->
@foreach($categories as $category)
  <div class="col-md-4 col-sm-6 ">
    <div class="card categories  mb-30" style="background-image:url({{ 'uploads/'.$category->image }}); background-blend-mode: multiply; background-color:#444; background-size:cover; background-position:center;">
      <a class="card-img-tiles"  href="/shop-grid">
        <div class="inner"></div>
      </a>
      <div class="card-block text-center " style=" border-radius:3px; background-blend-mode: multiply;">
        <h3 class="card-title padding-top-1x padding-bottom-1x" style="color:#fff;">{{ $category->title }}</h3>
          <p class="text-muted">{{ $category->description }}</p>
          <a class="btn btn-primary" href="/shop/{{ $category->id }}/category">{{ $category->title }}</a>
      </div>
    </div>
  </div>
@endforeach

          
        </div>
        <div class="text-center"><a class="btn btn-outline-secondary margin-top-none" href="/shop-grid">Shop Now</a></div>
      </section>

     <section class="container padding-top-3x">
        <h3 class="text-center mb-30  padding-bottom-1x" style="border-bottom:#ee2956 2px solid; max-width:50%; margin:auto auto;">Featured Products</h3>
                  <div class="promo-box-content text-center padding-top-1x padding-bottom-3x">
                    <div class="owl-carousel" style="z-index:0;" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;margin&quot;: 30, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;630&quot;:{&quot;items&quot;:2},&quot;991&quot;:{&quot;items&quot;:3},&quot;1200&quot;:{&quot;items&quot;:3}} }">
                      <img src="../img/components/img04.jpg" alt="Image">
                      <img src="../img/components/img05.jpg" alt="Image">
                      <img src="../img/components/img06.jpg" alt="Image">
                      <img src="../img/components/img10.jpg" alt="Image">
                      <img src="../img/components/img11.jpg" alt="Image">
                      <img src="../img/components/img12.jpg" alt="Image">                   
                    </div>
                   
                  </div>
          </section> 


      <!-- Check if there is a product -->
        @if(count($products) > 0)
           
      <!-- Featured Products Carousel-->
<section class="container"  >
  <h3 class="text-center mb-30  padding-top-2x padding-bottom-1x" style="border-bottom:#ee2956 2px solid; max-width:50%; margin:auto auto;">Discover!</h3>
  <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
    @foreach($products as $product)
    <!-- Loop through -->
    <div class="grid-item">
      <div class="product-card">
        <div class="product-badge"></div><a class="product-thumb" href="/shop-single/{{$product->id}}"><img href="/shop-single/{{$product->id}}" src="{{asset('uploads/'.$product->image) }}" height="100px" width="150px" /></a>
    <!--h3 class="product-title"><a href="/shop-single/{{$product->id}}">{{$product->name}}</a></h3-->
        <h4 class="product-price">
        Ksh. {{$product->price}} <br> <small class="label label-default">{{$product->stock }}  in stock.</small>
        </h4>
        <div class="product-buttons">

        <a href="{{'/add-to-cart'}}/<?php echo $product->id?>" class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</a>
        </div>
    </div>
    </div>
    @endforeach

  <!-- Product-->
  @endif
  </div>
</section>

        

        <!-- Product Widgets-->
    @include('inc.product-widget')     
    <!-- Services-->
    @include('inc.services')
  <!-- Popular Brands-->
    <section class="bg-faded padding-top-1x padding-bottom-2x">
      <div class="container">
        <!--h3 class="text-center mb-30 pb-2" style="color:#5d5d5d;">Popular Brands</h3-->
        <div class="owl-carousel" style="z-index : 0;" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: false, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;470&quot;:{&quot;items&quot;:3},&quot;630&quot;:{&quot;items&quot;:4},&quot;991&quot;:{&quot;items&quot;:5},&quot;1200&quot;:{&quot;items&quot;:6}} }"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/01.png" alt="Adidas"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/02.png" alt="Brooks"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/03.png" alt="Valentino"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/04.png" alt="Nike"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/05.png" alt="Puma"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/06.png" alt="New Balance"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/07.png" alt="Dior"></div>
      </div>
    </section>
    

     
@endsection