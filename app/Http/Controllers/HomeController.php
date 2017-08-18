<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Admin\products;
use Gloudemans\Shoppingcart\Facades\Cart; // for cart lib

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $cartItems = Cart::content();
        $products = products::all();
        return view('front/welcome',compact('products'),compact('cartItems'));
    }


    public function allCategories(){
        return view('front.shop.shop-categories');
    }

    

    public function accountProfile(){
        $products = products::all();
        return view ('front.accounts.account-profile')->with('products', $products);
    }

    public function shopGrid(){
        $cartItems = Cart::content();
        $products = products::all();
        return view ('front.shop.shop-grid',compact('cartItems'))->with('products', $products);
    }

    public function shopList(){
        $cartItems = Cart::content();
        $products = products::all();
        return view ('front.shop.shop-list',compact('cartItems'))->with('products', $products);
    }

  

    public function checkoutAddress(){
        return view ('front.checkout.checkout-address');
    }

    public function checkoutComplete(){
        return view('front.checkout.checkout-complete');
    }

    public function checkoutShipping(){
        return view ('front.checkout.checkout-shipping');
    }

    public function checkoutPayment(){
        return view ('front.checkout.checkout-payment');
    }

    public function checkoutReview(){
        return view ('front.checkout.checkout-review');
    }

    public function accountOrders(){
        return view ('front.accounts.account-orders');
    }

    public function faq(){
        return view ('front.faq');
    }
     public function profile(){
        return view ('front.accounts.account-profile');
    }
    public function about(){
        return view ('pages.about');
    }
    public function terms(){
        return view ('pages.term-of-use');
    }
    public function soon(){
        return view ('front.comming-soon');
    }
    public function add_cart($id){
        $products = products::find($id); // get prodcut by id
       Cart::add(array(
'id' => $products->id,
'name' => $products->name,
'qty' => 1,
'price' => $products->price,
'options' => array('img' => $products->image),
));
       
         return back();
    }
    public function destroy($id){
        Cart::remove($id);
        return back(); // will keep same page
    }
    public function cart(){
        $cartItems = Cart::content();
       return view ('front.checkout.cart',compact('cartItems'));
   }
   public function shopSingle($id)
   {
   $cartItems = Cart::content();
   $products = products::find($id); // get prodcut by id
       return view('front.shop.shop-single',compact('products'),compact('cartItems'));
   }
}
