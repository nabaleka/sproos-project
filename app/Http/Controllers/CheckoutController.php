<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Model\Admin\products;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Model\order;
use App\Address; // for cart lib

class CheckoutController extends Controller
{
     public function checkoutAddress(){
     	
        // check for user login
       
        $cartItems = Cart::content();
        $products = products::all();
        return view ('front.checkout.checkout-address', compact('cartItems'))->with('products', $products);
       
    
        
    }
      
    public function checkoutComplete(){
        $cartItems = Cart::content();
        $products = products::all();
        return view('front.checkout.checkout-complete',compact('cartItems'))->with('products', $products);
    }

    public function checkoutShipping(){
        $cartItems = Cart::content();
        $products = products::all();
        return view ('front.checkout.checkout-shipping',compact('cartItems'))->with('products', $products);
    }

    public function checkoutPayment(){
        $cartItems = Cart::content();
        $products = products::all();
        return view ('front.checkout.checkout-payment',compact('cartItems'))->with('products', $products);
    }
    public function store(Request $request){
        $this->validate($request, [
              'firstName' => 'required|min:5|max:35',
              'lastName' => 'required|min:5|max:35',
              'phoneNumber' => 'required|min:10|max:16',
              'email' => 'required|',
              'city' => 'required|min:5|max:25',
              'county' => 'required']);
           $cartItems = Cart::content();
          foreach ($cartItems as $cartItem) {
            $userid=Auth::user()->id;
          $orders=new orders;
          $orders->user_id = $userid;
          $orders->status= 'pending';
          $orders->qty = $cartItem->qty;
          $orders->products_id = $cartItem->id;
          $orders->tax=Cart::tax();
          $orders->total = $cartItem->qty * $cartItem->price;
          $orders->payments_id='112266677fff3';
          $orders->firstName= $request->firstName;
          $orders->lastName= $request->lastName;
          $orders->city = $request->city;
          $orders->county = $request->county;
          $orders->save();
          
          }
         
          return redirect('checkout-shipping');
         
      
      }
    
     public function shipping(Request $request){
       $shipping=$request->shipping;
       Session::put('shipping_method', $shipping);
      return redirect('checkout-review');
    }

    public function checkoutReview(){
        $cartItems = Cart::content();
        $products = products::all();
        return view ('front.checkout.checkout-review',compact('cartItems'))->with('products', $products);
    }

}
