<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

use App\Model\Admin\products;
use Gloudemans\Shoppingcart\Facades\Cart;
#use App\Model\order;
use App\Orders;
use App\shipings;
use App\users; 
use DB;

class CheckoutController extends Controller
{
   
    public function store(Request $request){
        $cartItems = Cart::content();
        
        $this->validate($request, [
              'firstName' => 'required',
              'lastName' => 'required',
              'phoneNumber' => 'required|min:10|max:16',
              'email' => 'required|',
              'city' => 'required|min:5|max:25',
              'country' => 'required']);
        
        foreach ($cartItems as $cartItem) {
        $userid = Auth::user()->id;
          $orders=new Orders;
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
         
          return redirect('checkout-shipping',compact('cartItems'))->with('products', $products);
      
      }
    
     public function shipping(Request $request){
        $cartItems = Cart::content();
        $this->validate($request, [
            'deliveryDate' => 'required',
            'deliveryTime' => 'required',
            'phoneNumber' => 'required|min:10|max:16',
            'deliveryInstructions' => 'required|',
            'phoneNumber' => 'required|min:5|max:25']);

            $shiping=new Shipings;
            $shiping->delivery_date= $request->deliveryDate;
            $shiping->delivery_time= $request->deliveryTime;
            $shiping->delivery_instructions= $request->deliveryDate;
            $shiping->phone_number= $request->phoneNumber;
            $shiping->save();

      return redirect('checkout-address')->with('cartItems', $cartItems);
    }

    public function checkoutReview(){
        $cartItems = Cart::content();
     
        return view ('front.checkout.checkout-review',compact('cartItems'));
    }

    public function checkoutAddress(){
        
          // check for user login
         
          $cartItems = Cart::content();
          $orders = DB::table('orders')->where('user_id',Auth::guard('buyer')->user()->id)->first();
          return view ('front.checkout.checkout-address', compact('cartItems','orders'));
         
      
          
      }
     
      public function checkoutComplete(){
       
        Cart::destroy();
          return view('front.checkout.checkout-complete');
      }
   public function checkoutShipping(){
    
        $phoneNumber = DB::table('users')->where('id',  Auth::guard('buyer')->user()->id)->value('phonenumber');
          return view ('front.checkout.checkout-shipping',compact('cartItems','phoneNumber'));
      }
  
      public function checkoutPayment(){
          $cartItems = Cart::content();
           $orders = DB::table('orders')->where('user_id',Auth::user()->id)->first();
          return view ('front.checkout.checkout-payment',compact('cartItems','orders'));
      }

}
