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

Route::get('/', 'HomeController@index');
Route::get('product/show/{id}','HomeController@show');

Route::resource('/cart','CartController');
Route::post('/post','CartController@store');
Route::get('/order/index','OrderController@index');
Route::get('/checkout/index','CheckoutController@index');
Route::get('/payment','CheckoutController@payment');
Route::post('store-payment','CheckoutController@storePayment')->name('payment.store');
Route::get('/checkout/success','CheckoutController@success');

//Auth
Auth::routes();


//stripe
Route::get('/cart/index', array('as' => 'index','CartController@store'));
Route::get('addmoney/stripe', array('as' => 'addmoney.paywithstripe','uses' => 'AddMoneyController@payWithStripe'));
Route::post('addmoney/stripe', array('as' => 'addmoney.stripe','uses' => 'AddMoneyController@postPaymentWithStripe'));
Route::get('payment', array('as' => 'addmoney.paywithstripe','uses' => 'AddMoneyController@payWithStripe'));
Route::post('addmoney/stripe', array('as' => 'addmoney.stripe','uses' => 'AddMoneyController@postPaymentWithStripe'));