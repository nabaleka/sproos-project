<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Seller;
use App\Products;
use App\Http\Controllers\Controller;
use App\Model\admin\categories;
use DB;


class AdminController extends Controller
{
    /* Restricts access to only the admin */
    public function __construct()
	{
	    $this->middleware('auth:admin');
	}
	
    /*
    Controll actions of the admin
    */

    public function manage(){
        #this is the first page that will appear
        #shows various options in summary:
        # - Featured products
        # - top banner
        # - categories
        # - top sellers
        return('Manage your sites');
    }
    public function cancel_feature($id){
     $feature = Products::find($id);
    if($feature) {
    $feature->featured= 0;
    $feature->save();
}
      return redirect('admin/sellers');
    }
     public function confirm_feature($id){
     $feature = Products::find($id);
    if($feature) {
    $feature->featured= 2;
    $feature->save();
}
      return redirect('admin/sellers');
    }

    public function sellers(){
        #Manage site sellers
        #top sellers
        #All sellers
         $sellers = DB::table('Sellers')
                  ->Join('products', 'sellers.id', '=', 'products.seller_id')
                  ->get();
        return view('admin/sellers',compact('sellers'));
    }

    public function revenue(){
        #manage site revenue from products and sellers
        return ('Manage the site revenue');

    }

    public function homePage(){
        $categories = categories::all();
        #manage the site homepage
        #by default, returns to admin homepage settings
        return view('admin/home-page',compact('categories'));
    }

    public function featuredProducts(){
        #manage the featured products
        return view('admin/featured-products');

    }

    # Featured page

    # categories

    #top sellers

    # banner


}
