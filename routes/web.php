<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


#luchetu
Route::get('/', 'HomeController@index')->name('home');
#account routes
Route::get('/create', 'HomeController@login');
Route::get('/account-profile', 'HomeController@accountProfile');
Route::get('/account-orders','HomeController@accountOrders');
Route::get('/faq','HomeController@faq');
Route::get('/home', 'HomeController@index')->name('home');

#shop routes
Route::get('/shop-list','HomeController@shopList');
Route::get('/shop-grid','HomeController@shopGrid');
Route::get('/cart','HomeController@cart');
Route::get('/categories', 'HomeController@allCategories');

#checkout routes
Route::get('/checkout-address','HomeController@checkoutAddress');
Route::get('/checkout-shipping','HomeController@checkoutShipping');
Route::get('/checkout-payment','HomeController@checkoutPayment');
Route::get('/checkout-review','HomeController@checkoutReview');
Route::get('/checkout-complete','HomeController@checkoutComplete');

#sitepages
Route::get('/about','HomeController@about');
Route::get('/terms','HomeController@terms');

#no available content
Route::get('/soon','HomeController@soon');



#admin Routes
/* Routes to the admin page */
Route::group(['namespace' => 'Admin'],function(){
	Route::get('admin/home','HomeController@index')->name('admin.home');
	Route::resource('admin/users','UserController');
	// Roles Routes
	Route::resource('admin/roles','RoleController');
	// Permission Routes
	Route::resource('admin/permissions','PermissionController');
	// Products Routes
	Route::resource('admin/products','ProductsController');
	// Invoices Routes
	Route::resource('admin/invoices','InvoicesController');
	// Orders Routes
	Route::resource('admin/orders','OrdersController');
	// Category Routes
	Route::resource('admin/category','CategoryController');
    // Subcategory Routes
	Route::resource('admin/subcategories','subcategoryController');
	//admin Auth request Routes
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	//admin Auth post Routes
	Route::post('admin-login', 'Auth\LoginController@login');
});
