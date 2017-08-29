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
    }

    # Featured page

    # categories

    #top sellers

    # banner


}
