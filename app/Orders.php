<?php
namespace App;

use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\products;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model {
   

    public function user(){
        return $this->belongsTo('App\user');
    }
    public function order_details()
    {
        return $this->belongsTo('App\order_details');
    }
}