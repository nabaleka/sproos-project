<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /* Restricts access to only the admin */
    public function __construct()
	{
	    $this->middleware('auth:admin');
	}
	
    /*
    Controll actions of the admin
    */

    public function manage(){
        #this is the first page that will appear
        #shows various options in summary:
        # - Featured products
        # - top banner
        # - categories
        # - top sellers
        return('Manage your sites');
    }

    public function sellers(){
        #Manage site sellers
        #top sellers
        #All sellers
        return view('admin/sellers');
    }

    public function revenue(){
        #manage site revenue from products and sellers
        return ('Manage the site revenue');

    }

    public function homePage(){
        #manage the site homepage
        #by default, returns to admin homepage settings
        return view('admin/home-page');
    }

    public function featuredProducts(){
        #manage the featured products
        return ('Manageyour featured products');

    }

    # Featured page

    # categories

    #top sellers

    # banner


}
