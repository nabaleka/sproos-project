<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Products;
use App\Banner;
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
        $latest_products = DB::table('order_details')
        ->leftjoin('products', 'products.id', '=', 'order_details.product_id')
        ->leftjoin('orders', 'orders.unique_order_id', '=', 'order_details.unique_order_id')
        ->select('order_details.product_id','products.price','products.name','products.image')
        ->orderBy('products.updated_at','DESC')
        ->take(4)
        ->get();
       
        $best_sellers = DB::table('products')
        ->join('order_details', 'order_details.product_id', '=', 'products.id')
        ->take(4)
        ->get();
     
      $categories = categories::all();
       $banner = Banner::all();
      $cartItems = Cart::content();
       $products = Products::all();
      return view('front/welcome',compact('products','banner'),compact('cartItems','latest_products','best_sellers'))->with('categories',$categories);
    }


    public function allCategories(){
        $categories = categories::all();
        $cartItems = Cart::content();
        $products = DB::table('products')->paginate(12);
        return view('front.shop.shop-categories',compact('products','cartItems','categories'));
    }

    public function shopGrid(){
        
        $cartItems = Cart::content();
        $categories = categories::all();
        $products = DB::table('products')->paginate(12);
        return view ('front.shop.shop-grid',compact('cartItems'))->with('products', $products)->with('categories',$categories);
    }

    public function shopList(){
        $cartItems = Cart::content();
        $categories = categories::all();
        $products = DB::table('products')->paginate(12);
        return view ('front.shop.shop-list',compact('cartItems','categories'))->with('products', $products);
    }

  

    public function checkoutAddress(){
        $cartItems = Cart::content();
        $products = Products::all();
        $categories = categories::all();
        return view ('front.checkout.checkout-address', compact('cartItems','categories','products'));
    }

    public function showCategory($id){

        //Get all categories
        $categories = categories::all();

        //Find the passed category.
        $category_id = $id;
        $onecategory = categories::findOrFail($category_id);

        //Find products with $category id
        //$products = DB::table('products')->where('category_id', '=', 100)->get();
        $products = DB::table('products')->where('category_id', '=', $category_id)->paginate(12);


        $cartItems = Cart::content();
        //$products = Products::all();
        return view('front.shop.shop-single-category', compact('cartItems','categories','products','onecategory'));
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

    public function accountProfile(){
        $cartItems = Cart::content();
        $Orders = Cart::content();
           $count = DB::table('orders')
            ->where('user_id', '=', Auth::guard('buyer')->user()->id)
             ->count();
        $categories = categories::all();
        $products = Products::all();
        return view ('front.accounts.account-profile',compact('cartItems','count','categories'))->with('products', $products);
    }

    public function accountOrders(){
        $cartItems = Cart::content();
        $products = Products::all();
           $count = DB::table('orders')
            ->where('user_id', '=', Auth::guard('buyer')->user()->id)
             ->count();
         $orders = DB::table('orders')
            ->where('user_id', '=', Auth::guard('buyer')->user()->id)
             ->get();
        $categories = categories::all();
        return view ('front.accounts.account-orders',compact('cartItems','count','orders','categories'))->with('products', $products);
    }
    public function accountAddress(){
        $cartItems = Cart::content();
        $products = Products::all();
         $count = DB::table('orders')
            ->where('user_id', '=', Auth::guard('buyer')->user()->id)
             ->count();
        $categories = categories::all();
        return view ('front.accounts.account-address',compact('cartItems','categories','count'))->with('products', $products);
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
   $seller_id = DB::table('products')->where('id', $id)->value('seller_id');
   $seller_products = DB::table('products')->where('seller_id', '=', $seller_id)->get();

   $products = Products::find($id);
   $product_seller = $products->seller_id;
   $seller_name= DB::table('sellers')
   ->leftJoin('products', 'sellers.id', '=', 'products.seller_id')
   ->get()->first();
   $allproducts = Products::all();
   $categories = categories::all();
    // get prodcut by id

   //
       return view('front.shop.shop-single',compact('products','seller_products','seller_name','categories','allproducts'),compact('cartItems'));
   }

   public function shopSeller($id)
   {
   $cartItems = Cart::content();
   $seller_id = DB::table('products')->where('id', $id)->value('seller_id');
   $seller_products = DB::table('products')->where('seller_id', '=', $id)->get();
   $seller_name= DB::table('sellers')
   ->leftJoin('products', 'sellers.id', '=', 'products.seller_id')
   ->get()->first();
   $allproducts = Products::all();
   $categories = categories::all();
   //$products = Products::find($id); // get prodcut by id

   //
       return view('front.shop.shop-seller',compact('products','seller_products','seller_name','categories','allproducts'),compact('cartItems'));
   }
   


   public function search(Request $request) {
    $search = $request->search_data;
    if ($search == '') {
        return "Empty search";
    } else {
        $Products = DB::table('products')->where('name', 'like', '%' . $search . '%');
        return view('front.shop.shop-list', ['msg' => 'Results: ' . $search], compact('products'));
    }
    
}


}
