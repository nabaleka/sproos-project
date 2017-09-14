<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Products;
use App\Seller;
use App\User;
use App\Orders;
use App\Model\admin\categories;
use App\Http\Controllers\Controller;
use DB;
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
		$categories = categories::all();

		return view('admin/home',compact('products','seller','users','orders', 'categories'));
	}
	
	public function stats()
    {
		$products = products::all();
    	return view('admin/stats',compact('products'));
	}
	
	public function customers()
    {
		$sellers = Seller::all();
		$products = products::all();
		
		$users = User::all();
	
		return view('admin/customers',compact('products','sellers','users','orders'));
    }

	public function customerDetails($id)
    {
		
		$user = User::findOrFail($id);
		$orders = DB::table('order_details')
		->leftJoin('products', 'products.id', '=', 'order_details.product_id')
		->leftJoin('orders', 'orders.unique_order_id', '=', 'order_details.unique_order_id')
	   ->where('order_details.user_id', '=', $id)
		->get();
		return view('admin/customers-details',compact('products','sellers','user','orders'));
	}
	public function sellerDetails($id)
    {
		
		$user = User::findOrFail($id);
		$orders = DB::table('order_details')
		->leftJoin('products', 'products.id', '=', 'order_details.product_id')
		->leftJoin('orders', 'orders.unique_order_id', '=', 'order_details.unique_order_id')
	   ->where('products.seller_id', '=', $id)
		->get();
		return view('admin/sellers-details',compact('products','sellers','user','orders'));
    }

}