<?php
namespace App\Model;

use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\products;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model {
   

    public function user(){
        return $this->belongsTo('App\user');
    }
   
}
}