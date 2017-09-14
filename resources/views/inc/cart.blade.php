@if (count($cartItems))

<div class="cart"><a href="/cart"></a><i class="icon-bag"></i><span class="count">{{Cart::count()}}</span><span class="subtotal">{{Cart::subtotal()}}</span>

    <div class="toolbar-dropdown">
    <!---->
    @foreach($cartItems as $cartItem)

  
    <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href=""><img src="{{asset('uploads/'.$cartItem->options->img) }}" height="100px" width="150px" />
                </a></a>
      <div class="dropdown-product-info"><a class="dropdown-product-title" href="{{ '/shop-single/'.$cartItem->id }}">{{$cartItem->name}}</a><span class="dropdown-product-details">Ksh{{$cartItem->price}}</span></div>
    </div>

  
    @endforeach
    <!---->
    
    <div class="toolbar-dropdown-group">
      <div class="column"><span class="text-lg">Total:</span></div>
      <div class="column text-right"><span class="text-lg text-medium">{{Cart::subtotal()}}</span></div>
    </div>
    
    <div class="toolbar-dropdown-group">
      <div class="column"><a class="btn btn-sm btn-block btn-secondary" href="/cart">View Cart</a></div>
      <div class="column"><a class="btn btn-sm btn-block btn-success" href="/checkout-shipping">Checkout</a></div>
    </div>
  </div>
</div>
@else


@endif