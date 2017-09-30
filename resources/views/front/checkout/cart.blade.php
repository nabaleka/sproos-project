
@extends('layouts.checkout')
@section('content')
      <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Cart</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index.html">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>Cart</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-3x mb-1">
        
        <!-- Shopping Cart-->
         @foreach($cartItems as $cartItem)
        <div class="table-responsive shopping-cart">
          <table class="table">
            <thead>
              <tr>
                <th>{{$cartItem->name}}</th>
                <th class="text-center">Quantity</th>
                <th class="text-center">Subtotal</th>
                <th class="text-center">Discount</th>
                <th class="text-center"><a class="btn btn-sm btn-outline-danger" href="{{'/delete_cart'}}/<?php echo $cartItem->rowId?>">Clear Cart</a></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                 
                  <div class="product-item"><a class="product-thumb" href="/shop-single/{{$cartItem->id}}"><img src="{{ asset('uploads/'.$cartItem->options->img) }}" height="100px" width="150px" /></a>
                    <div class="product-info">
                      <h4 class="product-title"><a href="/shop-single/{{$cartItem->id}}">Ksh{{$cartItem->price}}</a></h4><span><em>Size:</em> -</span><span><em>Color:</em> Turquoise</span>
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  
                    {{$cartItem->qty}}
                    
                      

                    </select>
                  </div>
                </td>
                <td class="text-center text-lg text-medium">Ksh{{$cartItem->subtotal}}</td>
                <td class="text-center">&mdash;</td>
                <td class="text-center"><a class="remove-from-cart" href="{{'/delete_cart'}}/<?php echo $cartItem->rowId?>" data-toggle="tooltip" title="Remove item"><i class="icon-cross"></i></a></td>
              </tr>
            </tbody>
          </table>
        </div>
            @endforeach
        <div class="shopping-cart-footer">
          <div class="column">
            <form class="coupon-form" method="post">
              <input class="form-control form-control-sm" type="text" placeholder="Coupon code" required>
              <button class="btn btn-outline-primary btn-sm" type="submit">Apply Coupon</button>
            </form>
          </div>
          <div class="column text-lg">Subtotal: <span class="text-medium">Ksh{{Cart::subtotal()}}</span></div>
        </div>
        <div class="shopping-cart-footer">
          <div class="column"><a class="btn btn-outline-secondary" href="/shop-grid"><i class="icon-arrow-left"></i>&nbsp;Back to Shopping</a></div>
          <div class="column"><a class="btn btn-primary" href="#">Update Cart</a><a class="btn btn-success" href="/checkout-shipping">Checkout</a></div>
        </div>

          

        </div>
      </div>
@endsection