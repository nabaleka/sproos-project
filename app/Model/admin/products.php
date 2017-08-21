<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    public function subcategories()
    {
    	return $this->belongsToMany('App\Model\subcategories','subcategories_products')->withTimestamps();
    }
    public function categories()
    {
    	return $this->belongsToMany('App\Model\categories','categories_products')->withTimestamps();;
    }
    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
