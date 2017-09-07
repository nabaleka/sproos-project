<?php

namespace App\Http\Controllers\Seller;
use App\Model\admin\categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SellerController extends Controller
{
    	
	public function __construct()
	{
	    $this->middleware('auth:seller');
	}
    //
    public function index(){
        $categories = categories::all();
        return view('seller.home', compact('categories'));
    }

    public function account()
    {
        //Show the account page
        return view('seller.account');
    }
}
