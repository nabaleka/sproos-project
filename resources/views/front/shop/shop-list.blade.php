@extends('layouts.app')

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

              <li>Shop List No Sidebar</li>

            </ul>

          </div>

        </div>

      </div>

      <!-- Page Content-->

      <div class="container padding-bottom-3x mb-1">

        <div class="row">

          <div class="col-lg-10 offset-lg-1">

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

                <div class="shop-view"><a class="grid-view" href="/shop-grid"><span></span><span></span><span></span></a><a class="list-view active" href="/shop-list"><span></span><span></span><span></span></a></div>

              </div>

            </div>

            @foreach($products as $product)

            <!-- Product-->

            <div class="product-card product-list"><a class="product-thumb" href="/shop-single/{{$product->id}}">

                <div class="product-badge text-danger"></div><img href="/shop-single/{{$product->id}}" src="{{asset('uploads/'.$product->image) }}" height="100px" width="150px" /></a>

              <div class="product-info">

                <h3 class="product-title"><a  href="/shop-single/{{$product->id}}">{{$product->name}}</a></h3>

                <h4 class="product-price">

                  <del>Ksh. 000</del>Ksh. {{$product->price}}

                </h4>

                <p class="hidden-xs-down">{{$product->description}}</p>

                <div class="product-buttons">

                  <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>

                  <a href="{{'/add-to-cart'}}/<?php echo $product->id?>" class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</a>

                </div>

              </div>

            </div>

            @endforeach

   

            

              <!-- Pagination-->
            {{$products->links('vendor.pagination.bootstrap-4')}}
             

            </div>

          </div>

        </div>

        

      </div>

    

@endsection