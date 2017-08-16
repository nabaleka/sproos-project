<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class subcategories extends Model
{
     public function products()
    {
    	return $this->belongsToMany('App\Model\products','products_subcategories')->orderBy('created_at','DESC')->paginate(5);
    }
    public function categories()
    {
    	return $this->belongsToMany('App\Model\categories','categories_subcategories')->withTimestamps();;
    }
    public function getRouteKeyName()
    {
    	return 'slug';
    }
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }
}
