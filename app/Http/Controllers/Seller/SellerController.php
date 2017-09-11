<?php

namespace App\Http\Controllers\Seller;
use App\Model\admin\categories;
use Illuminate\Http\Request;
use App\Products;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class SellerController extends Controller
{
    	
	public function __construct()
	{
	    $this->middleware('auth:seller');
	}
    //
    public function index(){
        //get the current user id
        $id = Auth::guard('seller')->id();
        //get products belonging to the seller
        $products = DB::table('products')->where('seller_id', '=', $id)->get();
        $categories = Categories::all();
        return view('seller.home', compact('categories','products'));
    }

    public function account()
    {
        //Show the account page
        $products = Products::all();
        return view('seller/profile', compact('products'));
    }
}
