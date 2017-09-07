<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use App\Products;
use App\Model\admin\categories;
use Gloudemans\Shoppingcart\Facades\Cart; // for cart lib

class HomeController extends Controller
{
    public $categories;
    
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
        $categories = categories::all();
        $cartItems = Cart::content();
        $products = Products::all();
        return view('front/welcome',compact('products'),compact('cartItems'))->with('categories',$categories);
    }


    public function allCategories(){
        $categories = categories::all();
        $cartItems = Cart::content();
        $products = Products::all();
        return view('front.shop.shop-categories',compact('products','cartItems','categories'));
    }

    

    public function accountProfile(){
        $cartItems = Cart::content();
        $categories = categories::all();
        $products = Products::all();
        return view ('front.accounts.account-profile',compact('cartItems','categories'))->with('products', $products);
    }

    public function shopGrid(){
        
        $cartItems = Cart::content();
        $categories = categories::all();
        $products = DB::table('products')->paginate(3);
        return view ('front.shop.shop-grid',compact('cartItems'))->with('products', $products)->with('categories',$categories);
    }

    public function shopList(){
        $cartItems = Cart::content();
        $categories = categories::all();
        $products = Products::all();
        return view ('front.shop.shop-list',compact('cartItems','categories'))->with('products', $products);
    }

  

    public function checkoutAddress(){
        $cartItems = Cart::content();
        $products = Products::all();
        $categories = categories::all();
        return view ('front.checkout.checkout-address', compact('cartItems','categories','products'));
    }

    public function checkoutComplete(){
        $cartItems = Cart::content();
        $products = Products::all();
        $categories = categories::all();
        return view('front.checkout.checkout-complete',compact('cartItems','categories'))->with('products', $products);
    }

    public function checkoutShipping(){
        $cartItems = Cart::content();
        $products = Products::all();
        return view ('front.checkout.checkout-shipping',compact('cartItems'))->with('products', $products);
    }

    public function checkoutPayment(){
        $cartItems = Cart::content();
        $products = Products::all();
        $categories = categories::all();
        return view ('front.checkout.checkout-payment',compact('cartItems','categories'))->with('products', $products);
    }

    public function checkoutReview(){
        $cartItems = Cart::content();
        $products = Products::all();
        $categories = categories::all();
        return view ('front.checkout.checkout-review',compact('cartItems','categories'))->with('products', $products);
    }

    public function accountAddress(){
        $cartItems = Cart::content();
        $products = Products::all();
        $categories = categories::all();
        return view ('front.accounts.account-address',compact('cartItems','categories'))->with('products', $products);
    }

    public function accountOrders(){
        $cartItems = Cart::content();
        $products = Products::all();
        $categories = categories::all();
        return view ('front.accounts.account-orders',compact('cartItems','categories'))->with('products', $products);
    }

    public function faq(){
        $cartItems = Cart::content();
        $products = Products::all();
        $categories = categories::all();
        return view ('front.faq',compact('cartItems','categories'))->with('products', $products);
    }
     public function profile(){
         $cartItems = Cart::content();
        $products = Products::all();
        $categories = categories::all();
        return view ('front.accounts.account-profile',compact('cartItems','categories'))->with('products', $products);
    }
    public function about(){
        $cartItems = Cart::content();
        $products = Products::all();
        $categories = categories::all();
        return view ('pages.about',compact('cartItems','categories'))->with('products', $products);
    }
    public function terms(){
        $cartItems = Cart::content();
        $products = Products::all();
        $categories = categories::all();
        return view ('front.terms',compact('cartItems','categories'))->with('products', $products);
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
    
   public function shopSingle($id)
   {
   $cartItems = Cart::content();
   $categories = categories::all();
   $products = Products::find($id); // get prodcut by id
       return view('front.shop.shop-single',compact('products','categories'),compact('cartItems'));
   }

   public function search(Request $request) {
    $search = $request->search_data;
    if ($search == '') {
        return view('front.home');
    } else {
        $Products = DB::table('products')->where('name', 'like', '%' . $search . '%');
        return view('front.shop.shop-list', ['msg' => 'Results: ' . $search], compact('products'));
    }
}
}
