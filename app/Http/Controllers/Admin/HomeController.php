<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Products;
use App\Seller;
use App\User;
use App\Orders;
use App\Http\Controllers\Controller;
class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	 
	
	public function __construct()
	{
	    $this->middleware('auth:admin');
	}
	
    public function index()
    {
		$seller = Seller::all();
		$products = products::all();
		$users = User::all();
		$orders = Orders::all();
		return view('admin/home',compact('products','seller','users','orders'));
	}
	
	public function stats()
    {
		$products = products::all();
    	return view('admin/stats',compact('products'));
    }


}