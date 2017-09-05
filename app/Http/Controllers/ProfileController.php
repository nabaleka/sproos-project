<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Model\Admin\products;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Model\orders;
use App\Model\address; 

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function accountProfile(){
        $cartItems = Cart::content();
        $products = products::all();
        return view ('front.accounts.account-profile',compact('cartItems'))->with('products', $products);
    }

    public function accountOrders(){
    	 $orders = Auth::user()->orders;
        $cartItems = Cart::content();
        $products = products::all();
        return view ('front.accounts.account-orders',compact('orders'),compact('cartItems'))->with('products', $products);
    }
    public function profile(){
         $cartItems = Cart::content();
        $products = products::all();
        return view ('front.accounts.account-profile',compact('cartItems'))->with('products', $products);
    }

}
