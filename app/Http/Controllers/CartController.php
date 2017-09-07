<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Admin\categories;

use Gloudemans\Shoppingcart\Facades\Cart; // for cart lib
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Orders;
use DB;
class CartController extends Controller
{
           public function __construct()

    {

      $this->middleware('auth:buyer');

          

    }


    public function cart(){
        $cartItems = Cart::content();
        $categories = categories::all();


        foreach ($cartItems as $cartItem) {
          $userid = Auth::user()->id;
          $orders=new Orders;
          $orders->user_id = $userid;
          $orders->status= 1;
          $orders->total_quantity = $cartItem->qty;
          $orders->tax=Cart::tax();
          $orders->total_price = ($cartItem->qty * $cartItem->price)+ Cart::tax();
          $orders->price = $cartItem->price;
          $orders->save();
          
         }
          $orders = DB::table('orders')->where('user_id',Auth::user()->id)->get();
          return view ('front.checkout.cart',compact('cartItems','orders','categories'));
   }
   
}
