<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = 'products';

    /**
     * Get the seller that owns the product.
     */
     public function seller()
     {
         return $this->belongsTo('App\Seller');
     }

     public function order_details(){
        return $this->belongsTo('App\order_details');
    }

}
