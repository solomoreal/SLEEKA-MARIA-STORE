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
Route::group(['prefix' => '/'], function () {
    //Pages
    Route::get('', 'PagesController@index')->name('index');
    Route::get('viewProduct/{id}', 'PagesController@viewProduct')->name('viewProduct');
    Route::get('viewByCategory/{id}', 'PagesController@viewByCategory')->name('viewByCategory');
    Route::get('viewBySubcategory/{id}', 'PagesController@viewBySubcategory')->name('viewBySubcategory');
    Route::get('searchProducts','PagesController@searchProduct')->name('searchProducts');
    Route::get('about','PagesController@about')->name('about');
    //auth Routes
    Route::get('profile', 'PagesController@profile')->name('profile');
   // Route::get('getContactForm', 'PagesController@getContactForm')->name('getContactForm');
    Route::post('postContact', 'PagesController@postContact')->name('postContact');    
    

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
 


});

//admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('allOrders', 'AdminController@allOrders')->name('allOrders');
    Route::get('pendingOrders', 'AdminController@pendingOrders')->name('pendingOrders');
    Route::get('newOrders', 'AdminController@newOrders')->name('newOrders');
    Route::get('payOnDeliveryOrders', 'AdminController@payOnDeliveryOrders')->name('payOnDeliveryOrders');
    Route::get('rejectedOrders', 'AdminController@rejectedOrders')->name('rejectedOrders');
    Route::get('cancelledOrders', 'AdminController@cancelledOrders')->name('cancelledOrders');
    Route::get('completedOrders', 'AdminController@completedOrders')->name('completedOrders');
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
