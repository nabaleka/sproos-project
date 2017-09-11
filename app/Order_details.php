<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{


     public function orders(){
          return $this->hasOne('App\Orders');
    }
    
     public function seller(){
        return $this->belongsTo('App\seller');
    }
     public function products()
    {
        return $this->belongsToMany('App\Model\products')->orderBy('created_at','DESC');
    }

    public function user(){
        return $this->belongsToMany('App\user');
    }
}
