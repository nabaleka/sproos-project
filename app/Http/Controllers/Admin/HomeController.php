<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Model\Admin\products;
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
		$products = products::all();
    	return view('admin/home',compact('products'));
	}
	
	public function stats()
    {
		$products = products::all();
    	return view('admin/stats',compact('products'));
    }


}