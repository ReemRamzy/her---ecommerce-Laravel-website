<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', 'PageController@home' );


Route::get('/sign_in', function () {
    return view('sign_in');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/items', 'ItemController@show' );
Route::get('/items/{item}', 'ItemController@item' );
Route::get('/browseitems', 'ItemController@browseitems' );

// ** auth ** //


Route::post('sign_up', 'RegisterationController@store');

//Route::get('sign_in', 'SessionController@create');
Route::post('sign_in', 'SessionController@store');
Route::get('logout', 'SessionController@destroy');

// account //

Route::get('account', 'UserController@profile');

Route::get('/shein', function () {
    return view('shein');
});


Route::get('dashboard', function () {
    return view('admin.dashboard');
});

Route::get('dashboard/product', 'ItemController@product');

// dashboard //


Route::post('store_product','ItemController@store');
Route::post('store_category','ItemController@categorystore');
Route::get('/delete_product/{id}','ItemController@destroy');
Route::get('/delete_category/{id}','ItemController@destroycat');

// ****cart**** //
Route::get('shoppingcart/{orderid}','OrderController@show');

Route::post('addtocart','OrderController@storeOrder');
Route::get('delete_cart_item/{id}','OrderController@destroy');

Route::get('load-cart-data','OrderController@cartcount');




