<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use App\Products;
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
        $products = Products::all();
        return view('front/welcome',compact('products'),compact('cartItems'));
    }


    public function allCategories(){
        $cartItems = Cart::content();
        $products = Products::all();
        return view('front.shop.shop-categories',compact('products'),compact('cartItems'));
    }

    

    public function accountProfile(){
        $cartItems = Cart::content();
        $products = Products::all();
        return view ('front.accounts.account-profile',compact('cartItems'))->with('products', $products);
    }

    public function shopGrid(){
        $cartItems = Cart::content();
        $products = Products::all();
        return view ('front.shop.shop-grid',compact('cartItems'))->with('products', $products);
    }

    public function shopList(){
        $cartItems = Cart::content();
        $products = Products::all();
        return view ('front.shop.shop-list',compact('cartItems'))->with('products', $products);
    }

  

    public function checkoutAddress(){
        $cartItems = Cart::content();
        $products = Products::all();
        return view ('front.checkout.checkout-address', compact('cartItems'))->with('products', $products);
    }

    public function checkoutComplete(){
        $cartItems = Cart::content();
        $products = Products::all();
        return view('front.checkout.checkout-complete',compact('cartItems'))->with('products', $products);
    }

    public function checkoutShipping(){
        $cartItems = Cart::content();
        $products = Products::all();
        return view ('front.checkout.checkout-shipping',compact('cartItems'))->with('products', $products);
    }

    public function checkoutPayment(){
        $cartItems = Cart::content();
        $products = Products::all();
        return view ('front.checkout.checkout-payment',compact('cartItems'))->with('products', $products);
    }

    public function checkoutReview(){
        $cartItems = Cart::content();
        $products = Products::all();
        return view ('front.checkout.checkout-review',compact('cartItems'))->with('products', $products);
    }

    public function accountAddress(){
        $cartItems = Cart::content();
        $products = Products::all();
        return view ('front.accounts.account-address',compact('cartItems'))->with('products', $products);
    }

    public function accountOrders(){
        $cartItems = Cart::content();
        $products = Products::all();
        return view ('front.accounts.account-orders',compact('cartItems'))->with('products', $products);
    }

    public function faq(){
        $cartItems = Cart::content();
        $products = Products::all();
        return view ('front.faq',compact('cartItems'))->with('products', $products);
    }
     public function profile(){
         $cartItems = Cart::content();
        $products = Products::all();
        return view ('front.accounts.account-profile',compact('cartItems'))->with('products', $products);
    }
    public function about(){
        $cartItems = Cart::content();
        $products = Products::all();
        return view ('pages.about',compact('cartItems'))->with('products', $products);
    }
    public function terms(){
        $cartItems = Cart::content();
        $products = Products::all();
        return view ('pages.term-of-use',compact('cartItems'))->with('products', $products);
    }
    public function soon(){
        return view ('front.comming-soon');
    }
    public function add_cart($id){
        $products = Products::find($id); // get prodcut by id
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
   $products = Products::find($id); // get prodcut by id
       return view('front.shop.shop-single',compact('products'),compact('cartItems'));
   }
}
