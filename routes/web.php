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


#tobi
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
#account routes
Route::get('/create', 'HomeController@login');
Route::get('/account-profile', 'HomeController@accountProfile')->middleware('auth');
Route::get('/account-orders','HomeController@accountOrders')->middleware('auth');
Route::get('/account-address','HomeController@accountAddress')->middleware('auth');;
Route::get('/faq','HomeController@faq');
Route::get('/home', 'HomeController@index')->name('home');

#shop routes
Route::get('/shop-list','HomeController@shopList');
Route::get('/shop-grid','HomeController@shopGrid');
<<<<<<< HEAD
Route::get('/cart','CartController@cart');
=======
Route::get('/cart','HomeController@cart')->middleware('auth');;
>>>>>>> a418c30298790808458ccad91c24f31aef92e689
Route::get('/categories', 'HomeController@allCategories');
Route::get('/add-to-cart/{id}', 'HomeController@add_cart');
Route::get('/delete_cart/{id}', 'HomeController@destroy');

#checkout routes

<<<<<<< HEAD
Route::get('/checkout-address','CheckoutController@checkoutAddress');
Route::get('/checkout-shipping','CheckoutController@checkoutShipping');
Route::get('/checkout-payment','HomeController@checkoutPayment');
Route::get('/checkout-complete','HomeController@checkoutComplete');
Route::get('/checkout-payment','PaymentsController@payment');
Route::get('/checkout-review','HomeController@checkoutReview')->name('checkout-review');
Route::get('/checkout-payment','PaymentsController@payment');

=======
#Route::get('/checkout-address','CheckoutController@checkoutAddress');
Route::get('/checkout-shipping','HomeController@checkoutShipping')->middleware('auth');;
Route::get('/checkout-payment','HomeController@checkoutPayment')->middleware('auth');;
Route::get('/checkout-complete','HomeController@checkoutComplete')->middleware('auth');;
Route::get('/checkout-payment','PaymentsController@payment');
Route::get('/checkout-review','HomeController@checkoutReview')->name('checkout-review')->middleware('auth');;
>>>>>>> a418c30298790808458ccad91c24f31aef92e689

Route::get('/shop-single/{id}','HomeController@shopSingle');

#sitepages
Route::get('/about','HomeController@about');
Route::get('/terms','HomeController@terms');

#no available content
Route::get('/soon','HomeController@soon');

Route::get('admin', 'Admin\Auth\LoginController@showLoginForm');

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
	#Route::resource('admin/products','ProductsController');
	// Invoices Routes
	Route::resource('admin/invoices','InvoicesController');
	// Orders Routes
	#Route::resource('admin/orders','OrdersController');
	// Category Routes
	Route::resource('admin/category','CategoryController');
    // Subcategory Routes
	Route::resource('admin/subcategories','subcategoryController');
	//admin Auth request Routes
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	//admin Auth post Routes
	Route::post('admin-login', 'Auth\LoginController@login');

	Route::get('admin/sellers','AdminController@sellers');

	Route::get('admin/home-page','AdminController@homePage');

	Route::get('admin/featured-products','AdminController@featuredProducts');

	Route::get('admin/dropzone', 'DropzoneController@dropzone');
	
	Route::post('admin/dropzone/store', ['as'=>'dropzone.store','uses'=>'DropzoneController@dropzoneStore']);

});



Route::post('/checkout', 'CheckoutController@store')->name('checkout');
Route::post('/shipping', 'CheckoutController@shipping')->name('shipping');


/** Seller routes**/ 
Route::group(['namespace' => 'Seller'],function(){
	Route::get('seller','SellerController@index')->name('seller');
	Route::get('seller-login', 'Auth\LoginController@showLoginForm')->name('seller.login');
	//admin Auth post Routes
	Route::post('seller-login', 'Auth\LoginController@login');
	Route::get('seller-register', 'Auth\SellerRegisterController@showRegistrationForm');
	Route::post('seller-register', 'Auth\SellerRegisterController@register');
	Route::get('seller-account', 'SellerController@account')->name('seller.account');
	Route::resource('seller/products','ProductsController');
});

Route::get('/search','SearchController@index')->name('search');

Route::get('login/{provider}', 'SocialAuthController@auth')
->where(['provider' => 'facebook|google|twitter']);

Route::get('login/{provider}/callback', 'SocialAuthController@login')
->where(['provider' => 'facebook|google|twitter']);