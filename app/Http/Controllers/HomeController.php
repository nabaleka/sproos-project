<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Admin\products;

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
        $products = products::all();
        return view('front/welcome',compact('products'));
    }


    public function allCategories(){
        return view('front.shop.shop-categories');
    }

    

    public function accountProfile(){
        return view ('front.accounts.account-profile');
    }

    public function shopGrid(){
        return view ('front.shop.shop-grid');
    }

    public function shopList(){
        return view ('front.shop.shop-list');
    }

    public function cart(){
        return view ('front.checkout.cart');
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
}
