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
        ->leftJoin('orders', 'orders.unique_order_id', '=',
         'order_details.unique_order_id')
        ->select('order_details.unique_order_id', 
        'orders.total_price','orders.status','orders.created_at',
        'order_details.payment_method','orders.user_id')
        ->distinct()->get('order_details.unique_order_id');
        return view('admin/orders',compact('orders'));
    }
    public function showOrderDetails($id){
         //load order_details view
        $details = DB::table('order_details')
        ->where('order_details.user_id', '=', $id)
		->leftJoin('products', 'products.id', '=', 'order_details.product_id')
        ->leftJoin('users', 'users.id', '=',
         'order_details.user_id')
        ->leftJoin('sellers', 'sellers.id', '=',
         'order_details.seller_id')
         ->select('users.first_name as customer', 
         'sellers.first_name as seller','users.email as customer_email','sellers.email as seller_email',
         'order_details.payment_method','order_details.user_id','sellers.phonenumber as seller_number','products.name as product','order_details.unique_order_id as order_id')
        ->get();
        return view('admin/order_details',compact('details'));


    }
}
