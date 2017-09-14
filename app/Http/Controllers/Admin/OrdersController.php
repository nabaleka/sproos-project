<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    //

    public function showOrders(){
        //load report view
        return view('admin/orders');
    }
}
