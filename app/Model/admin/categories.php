<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
     public function products()
    {
    	return $this->belongsToMany('App\Model\products','categories_products')->orderBy('created_at','DESC')->paginate(5);
    }
    public function getRouteKeyName()
    {
    	return 'slug';
    }
    public function subcategories()
    {
    	return $this->belongsToMany('App\Model\subcategories','subcategories_categories')->orderBy('created_at','DESC')->paginate(5);
    }
}
