<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Admin\categories;
use App\Model\Admin\products;
use Gloudemans\Shoppingcart\Facades\Cart; // for cart lib
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\shoppingCart;
use DB;
class CartController extends Controller
{
           public function __construct()

    {

      $this->middleware('auth:buyer');

          

    }
    public function destroy($id){
      Cart::remove($id);
      return back(); // will keep same page
  }

 public function add_cart($id){
        $products = Products::find($id); // get prodcut by id
       Cart::add(array(
            'id' => $products->id,
            'name' => $products->name,
            'qty' => 1,
            'price' => $products->price,
            'options' =>
             array('seller_id'=>$products->seller_id,'img' => $products->image,),
            ));
       
         return back();
    }
      public function updateCart(Request $request, $rowId)
    {
       $rowId = $rowId;
         
    Cart::update($rowId, $request->qty);
          }
    public function cart(){
        $cartItems = Cart::content();
       $categories = categories::all();


        //foreach ($cartItems as $cartItem) {
         // $userid = Auth::user()->id;
        //  $cart=new shoppingCart;
        //  $cart->user_id = $userid;
        //  $cart->product_id = $cartItem->id;
        //  $cart->cancelled= 0;
        //  $cart->quantity = $cartItem->qty;
        //  $cart->product_name=$cartItem->name;
        //  $cart->price = $cartItem->price;
         // $cart->total_price = Cart::total();
         // $cart->product_image = $cartItem->options->img;
         // $cart->save();
          
        // }
          //$carts = DB::table('shopping_carts')->where('user_id',Auth::user()->id)->get();
          return view  ('front.checkout.cart',compact('cartItems','carts','categories'));
   }
  
}