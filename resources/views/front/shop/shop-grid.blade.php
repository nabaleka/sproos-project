@extends('layouts.theme')

@section('content')

      <!-- Page Title-->

      <div class="page-title">

        <div class="container">

          <div class="column">

            <h1>Shop</h1>

          </div>

          <div class="column">

            <ul class="breadcrumbs">

              <li><a href="/">Home</a>

              </li>

              <li class="separator">&nbsp;</li>

              <li>Shop</li>

            </ul>

          </div>

        </div>

      </div>

      <!-- Page Content-->

      <div class="container padding-bottom-3x mb-1">

        <!-- Shop Toolbar-->

        <div class="shop-toolbar padding-bottom-1x mb-2">

          <div class="column">

            <div class="shop-sorting">

              <label for="sorting">Sort by:</label>

              <select class="form-control" id="sorting">

                <option>Popularity</option>

                <option>Low - High Price</option>

                <option>High - Low Price</option>

                <option>Avarage Rating</option>

                <option>A - Z Order</option>

                <option>Z - A Order</option>

              </select><span class="text-muted">Showing:&nbsp;</span><span>1 - 12 items</span>

            </div>

          </div>

          <div class="column">

            <div class="shop-view"><a class="grid-view active" href="/shop-grid"><span></span><span></span><span></span></a><a class="list-view" href="/shop-list"><span></span><span></span><span></span></a></div>

          </div>

        </div>

        <!-- Products Grid-->

        <div class="isotope-grid cols-4 mb-2">

          <div class="gutter-sizer"></div>

          <div class="grid-sizer"></div>

           @foreach($products as $product)

          <!-- Product-->

          <div class="grid-item">

            <div class="product-card">

              <div class="product-badge text-danger"></div><a class="product-thumb" href="/shop-single/{{$product->id}}"><img href="/shop-single/{{$product->id}}" src="{{asset('uploads/'.$product->image) }}" height="100px" width="150px" /></a>

      

                <h4 class="product-price">

                   Ksh. {{$product->price}}<br><small>In Stock: {{$product->stock}}</small>

                </h4>

                <div class="product-buttons">

                
                <a href="{{'/add-to-cart'}}/<?php echo $product->id?>" class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</a>


              </div>

            </div>

          </div>

          @endforeach

         </div>

     {{$products->links('vendor.pagination.bootstrap-4')}}
      </div>    


      @include('inc.footer')     


@endsection