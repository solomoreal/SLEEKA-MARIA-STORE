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


Route::resource('/products', 'ProductController');
Route::get('/fetchCategories','ProductController@fetchCategories')->name('fetchCategories');
Route::resource('/colours', 'ColourController');
Route::resource('/categories', 'CategoryController');
Route::resource('/subcategories', 'SubcategoryController');
Route::resource('/sizes', 'SizeController');
//used to pass arrays of countries into the database
//Route::get('/country' ,'CountryController@store');

Route::group(['prefix' => '/'], function () {
    //Pages
    Route::get('', 'PagesController@index')->name('index');
    Route::get('viewProduct/{id}', 'PagesController@viewProduct')->name('viewProduct');
    Route::get('viewByCategory/{id}', 'PagesController@viewByCategory')->name('viewByCategory');
    Route::get('viewBySubcategory/{id}', 'PagesController@viewBySubcategory')->name('viewBySubcategory');
    Route::get('searchProducts','PagesController@searchProduct')->name('searchProducts');
    Route::get('about','PagesController@about')->name('about');
    //auth Routes
    Route::get('profile', 'PagesController@profile')->middleware('auth')->name('profile');
    Route::get('editProfile/{id}','PagesController@editProfile')->middleware('auth')->name('editProfile');
    Route::put('updateProfile', 'UsersController@update')->middleware('auth')->name('updateProfile');
    Route::get('fetchStates','PagesController@fetchStates')->name('fetchStates');
    Route::get('orderDetails/{id}', 'PagesController@orderDetails')->middleware('auth')->name('orderDetails');
    Route::get('customerInvoice/{id}', 'pagesController@customerInvoice')->middleware('auth')->name('customerInvoice');
   // Route::get('getContactForm', 'PagesController@getContactForm')->name('getContactForm');
    Route::post('postContact', 'PagesController@postContact')->name('postContact'); 
    Route::post('postComplain','PagesController@postComplain')->middleware('auth')->name('postComplain');  
    

    //Cart
    Route::post('addToCart', 'PagesController@addToCart')->name('addToCart');
    Route::get('getCart', 'PagesController@getCart')->name('getCart');
    Route::get('reduceByOne/{id}', 'PagesController@reduceItemByOne')->name('reduceByOne');
    Route::get('removeItem/{id}', 'PagesController@removeItem')->name('removeItem');
    Route::get('emptyCart', 'PagesController@emptyCart')->name('emptyCart');
    Route::get('checkout', 'PagesController@checkout')->middleware('auth')->name('checkout');

    //payStack
    Route::post('/pay', 'PagesController@redirectToGateway')->name('pay');
    Route::get('/payment/callback', 'PagesController@handleGatewayCallback');
    //test routes
    Route::view('test-form','pages.test-form' );
 


});

//admin
Route::group(['prefix' => 'admin'], function () {
    //orders
    Route::get('allOrders', 'AdminController@allOrders')->name('allOrders');
    Route::get('generalOrdersQuery/{status}', 'AdminController@generalOrdersQuery')->name('orders');
    Route::get('pendingOrders/{status}', 'AdminController@pendingOrders')->name('pendingOrders');
    Route::get('newOrders', 'AdminController@newOrders')->name('newOrders');
    Route::get('inProgress/{status}', 'AdminController@inProgress')->name('inProgress');
    Route::get('rejectedOrders/{status}', 'AdminController@rejectedOrders')->name('rejectedOrders');
    Route::get('cancelledOrders/{status}', 'AdminController@cancelledOrders')->name('cancelledOrders');
    Route::get('completedOrders/{status}', 'AdminController@completedOrders')->name('completedOrders');
    Route::get('orderItem/{id}', 'AdminController@orderItem')->name('orderItem');
    Route::get('changeStatus/{id}/{status}','AdminController@changeStatus' )->name('changeStatus');
    Route::get('changeUserStatus/{id}','AdminController@changeUserStatus' )->name('changeUserStatus');
    //customers
    Route::get('viewCustomers','AdminController@viewCustomers')->name('viewCustomers');
    Route::get('viewCustomer/{id}','AdminController@viewCustomer')->name('viewCustomer');
    //products
    Route::get('admin_viewProduct/{id}', 'AdminController@viewProduct')->name('admin.viewProduct');
    Route::get('editProduct/{id}','AdminController@editProduct')->name('editProduct');
    Route::get('promote/{id}', 'AdminController@promoteProduct')->name('promote');
    Route::get('adminLogin','Auth\AdminLoginController@loginForm');
    Route::post('adminLogin','Auth\AdminLoginController@login')->name('adminLogin');
    //ads
    Route::resource('ads', 'AdsController');
    
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
