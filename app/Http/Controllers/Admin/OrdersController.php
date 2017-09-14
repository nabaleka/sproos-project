<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class OrdersController extends Controller
{
    //

    public function showOrders(){
        //load orders view
        $orders = DB::table('order_details')
		->leftJoin('products', 'products.id', '=', 'order_details.product_id')
		->leftJoin('orders', 'orders.unique_order_id', '=', 'order_details.unique_order_id')
		->get();
        return view('admin/orders',compact('orders'));
    }
    public function showOrderDetails($id){
        


    }
}
