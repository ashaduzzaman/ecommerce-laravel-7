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

// Route::redirect('/', '/home');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('products', 'ProductController@index')->name('products.index');
Route::get('products/{id}', 'ProductController@show')->name('products.show');
Route::get('/products/search','ProductController@search')->name('product.search');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add');
    Route::get('/cart', 'CartController@index')->name('cart.index');
    Route::get('/cart/destroy/{itemId}', 'CartController@destroy')->name('cart.destroy');
    Route::get('/cart/update/{itemId}', 'CartController@update')->name('cart.update');
    Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');
    Route::get('/cart/apply-coupon', 'CartController@applyCoupon')->name('cart.coupon');

    Route::resource('orders', 'OrderController');
    Route::resource('shops', 'ShopController');
    Route::get('/account', 'AccountController@index')->name('account.index');
    Route::post('/account/update', 'AccountController@update')->name('account.update');
    Route::post('/account/change-password', 'AccountController@changePassword')->name('account.changePassword');
});

Route::get('paypal/checkout/{order}', 'PaypalController@getExpressCheckout')->name('paypal.checkout');
Route::get('paypal/checkout-success/{order}', 'PaypalController@getExpressCheckoutSuccess')->name('paypal.success');
Route::get('paypal/checkout-cancel', 'PaypalController@cancelPage')->name('paypal.cancel');

Route::get('/contact-us', 'ContactController@index')->name('contact.index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
