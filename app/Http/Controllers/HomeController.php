<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Products;
use App\Banner;
use App\Orders;
use App\Seller;
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
        $best_sellers = DB::table('order_details')
        ->leftjoin('products', 'order_details.product_id', '=', 'products.id')
        ->leftjoin('orders', 'orders.unique_order_id', '=', 'order_details.unique_order_id')
        ->select('order_details.product_id','products.price','products.name','products.image')
        ->orderBy('products.updated_at','DESC')
        ->distinct()
        ->take(4)
        ->get();
       
        $latest_products = DB::table('products')
        ->orderBy('updated_at','DESC')
        ->take(4)
        ->get();

      $featured_products = DB::table('products')->where('featured',2)
        ->orderBy('updated_at','DESC')
        ->take(5)
        ->get();

      $categories = categories::all();
       $banner = Banner::all();
      $cartItems = Cart::content();
       $products = Products::all();
      return view('front/welcome',compact('products','banner'),compact('cartItems','latest_products','best_sellers','featured_products'))->with('categories',$categories);
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
        
        $orders = Orders::all();
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
   
   public function shopSingle($id)
   {
   $cartItems = Cart::content();
   
   $seller_id = DB::table('products')->where('id', $id)->value('seller_id');
   $seller_products = DB::table('products')->where('seller_id', '=', $seller_id)->get();

   $products = Products::find($id);
   //Get the seller id from the products
   //$seller_id = $products->seller_id;

   //$product_seller = $products->seller_id;
   $seller = Seller::find($seller_id);
   $product_seller = $seller->first_name." ". $seller->last_name;
   $allproducts = Products::all();
   $categories = categories::all();
    // get prodcut by id

   //
       return view('front.shop.shop-single',compact('products','seller_id','product_seller','categories','allproducts'),compact('cartItems'));
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
   $cartItems = Cart::content();
   //$products = Products::find($id); // get prodcut by id

   //
       return view('front.shop.shop-seller',compact('products','seller_products','seller_name','categories','allproducts'),compact('cartItems'));
   }
   


   public function search(Request $request) {
    $categories = categories::all();
    $cartItems = Cart::content();

    //Get the search term from the request.
    $search = $request->search_data;


    //Check if search string is empty or null
    if ($search == '') {
        //Bring in all items
        $products= DB::table('products')
        ->leftJoin('categories', 'categories.id', '=', 'products.category_id')
        ->select('products.*', 'categories.id as category_id','categories.title')
        ->paginate(12);
        return view('front.search', ['msg' => 'Results: ' . $search], compact('products','categories','cartItems','search'));
    } else {

        //Use the search term to find data
        //$products = DB::table('products')->get();
        $products= DB::table('products')
        ->leftJoin('categories', 'categories.id', '=', 'products.category_id')
        ->select('products.*', 'categories.*')
        //->where('products.price', 'like', '%'.$search.'%')
        ->Where('products.name', 'like', '%'.$search)
        ->orWhere('products.description', 'like', '%'.$search.'%')
        ->orWhere('categories.title', 'like', '%'.$search)
        ->paginate(12);
        if(count($products)<= 0){
            $products= DB::table('products')
            ->leftJoin('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.*')
            ->paginate(12);            
            return view('front.search', ['msg' => 'Results for : \'' . $search .'\' not found'], compact('products','categories','cartItems','search'));

        }

        else{
            return view('front.search', ['msg' => 'Results: ' . $search], compact('products','categories','cartItems','search'));
        }
        
    }
    
}

public function hi(Request $request){

    return 'Request Received';

}

public function theme(){
    $best_sellers = DB::table('order_details')
    ->leftjoin('products', 'products.id', '=', 'order_details.product_id')
    ->leftjoin('orders', 'orders.unique_order_id', '=', 'order_details.unique_order_id')
    ->select('order_details.product_id','products.price','products.name','products.image')
    ->orderBy('products.updated_at','DESC')
    ->groupBy('products.id')
    ->take(4)
    ->get();
   
    $latest_products = DB::table('products')
    ->orderBy('updated_at','DESC')
    ->take(4)
    ->get();
 
  $categories = categories::all();
   $banner = Banner::all();
  $cartItems = Cart::content();
   $products = Products::all();
  return view('layouts.theme',compact('products','banner'),compact('cartItems','latest_products','best_sellers'))->with('categories',$categories);
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
