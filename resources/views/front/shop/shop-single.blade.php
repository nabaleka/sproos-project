@extends('layouts.app')
@section('content')
      <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>{{$products->name}}</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="/">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li><a href="shop-grid-ls.html">Shop</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>{{$products->name}}</li>

              
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-3x mb-1">
        <div class="row">
          <!-- Poduct Gallery-->
          <div class="col-md-6">
            <div class="product-gallery"><span class="product-badge text-danger"></span>
              <div class="gallery-wrapper">
                <div class="gallery-item active"><a href="{{asset('uploads/'.$products->image) }}" data-hash="one" data-size="1000x667"></a></div>
                <div class="gallery-item"><a href="{{asset('uploads/'.$products->image2) }}" data-hash="two" data-size="1000x667"></a></div>
                <div class="gallery-item"><a href="{{asset('uploads/'.$products->image3) }}" data-hash="three" data-size="1000x667"></a></div>
                <div class="gallery-item"><a href="{{asset('uploads/'.$products->image4) }}" data-hash="four" data-size="1000x667"></a></div>
                <div class="gallery-item"><a href="img/shop/single/05.jpg" data-hash="five" data-size="1000x667"></a></div>
              </div>
              <div class="product-carousel owl-carousel">
                <div data-hash="one"><img src="{{asset('uploads/'.$products->image) }}" height="100px" width="150px" /></div>
                <div data-hash="two"><img src="{{asset('uploads/'.$products->image2) }}" height="100px" width="150px" /></div>
                <div data-hash="three"><img src="{{asset('uploads/'.$products->image3) }}" height="100px" width="150px" /></div>
                <div data-hash="four"><img src="{{asset('uploads/'.$products->image4) }}" height="100px" width="150px" /></div>

              </div>
              <ul class="product-thumbnails">
                <li class="active"><a href="#one"><img src="{{asset('uploads/'.$products->image) }}" height="100px" width="150px" /></a></li>
                <li><a href="#two"><img src="{{asset('uploads/'.$products->image2) }}" height="100px" width="150px" /></a></li>
                <li><a href="#three"><img src="{{asset('uploads/'.$products->image3) }}" height="100px" width="150px" /></a></li>
                <li><a href="#four"><img src="{{asset('uploads/'.$products->image4) }}" height="100px" width="150px" /></a></li>

              </ul>
            </div>
          </div>
          <!-- Product Info-->
          <div class="col-md-6">
            <div class="padding-top-2x mt-2 hidden-md-up"></div>
              <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
              </div><span class="text-muted align-middle">&nbsp;&nbsp;4.2 | 0 customer reviews</span>
              
            <h2 class="padding-top-1x text-normal"> {{$products->name}}</h2><span class="h2 d-block">
              &nbsp; {{$products->price}}</span>
            <p> {{$products->description}}</p>
            <div class="row margin-top-1x">
              <div class="col-sm-4">

              </div>
              <div class="col-sm-5">

              </div>
              <div class="col-sm-3">

              </div>
            </div>
            <div class="pt-1 mb-2"><span class="text-medium">{{ $products->name }}</span></div>
            
            <a href="{{'/shop-seller/'.$products->seller_id}}" class="btn btn-outline-primary btn-sm" >Seller Products</a>
            
            <h3 style="color:#ee2956;">seller:{{$seller_name->first_name}} {{$seller_name->last_name}}</h3>
            <div class="padding-bottom-1x mb-2"><span class="text-medium">Categories:&nbsp;</span><a class="navi-link" href="#">Men’s shoes,</a><a class="navi-link" href="#"> Snickers,</a><a class="navi-link" href="#"> Sport shoes</a></div>
            <hr class="mb-3">
            <div class="d-flex flex-wrap justify-content-between">
              <div class="entry-share mt-2 mb-2"><span class="text-muted">Share:</span>
                <div class="share-links"><a class="social-button shape-circle sb-facebook" href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter" href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram" href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus" href="#" data-toggle="tooltip" data-placement="top" title="Google +"><i class="socicon-googleplus"></i></a></div>
              </div>
              <div class="sp-buttons mt-2 mb-2">
               
               
               
               <a href="{{'/add-to-cart'}}/<?php echo $products->id?>" class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</a>
               
              </div>
            </div>
          </div>
        </div>
        <!-- Product Tabs-->
        <div class="row padding-top-3x mb-3">
          <div class="col-lg-10 offset-lg-1">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" href="#description" data-toggle="tab" role="tab">Description</a></li>
              <li class="nav-item"><a class="nav-link" href="#reviews" data-toggle="tab" role="tab">Reviews (3)</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade show active" id="description" role="tabpanel">
                <p>{{$products->description}}</p>
                
                <p class="mb-30"></p>

              </div>
              <div class="tab-pane fade" id="reviews" role="tabpanel">
              shipping info here
              </div>
            </div>
          </div>
        </div>

        @if(count($allproducts)>0)
        <!-- Related Products Carousel-->
        <h3 class="text-center padding-top-2x mt-2 padding-bottom-1x">You May Also Like</h3>
        <!-- Carousel-->
        <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
        @foreach($allproducts as $all)
          <!-- Product-->
            <div class="grid-item">
              <div class="product-card">
                <div class="product-badge text-danger"></div><a class="product-thumb" href="/shop-single/{{ $all->id}}"><img src="{{asset('uploads/'.$all->image2)}}" alt="Product"></a>
                  <h3 class="product-title"><a href="{{'/shop-single/'.$all->id}}"></a></h3>
                  <h4 class="product-price">
                    Ksh. {{ $all->price}}
                  </h4>
                <div class="product-buttons">
                  
                  <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
              </div>
            </div>
          @endforeach


        </div>
        @endif
      </div>

@endsection
