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
Route::get('/app', function(){ return view('layouts/app'); })->name('app');
Route::get('/logout','Auth\LoginController@logout')->name('logout');
Route::get('/index', 'JourneyController@index');
Route::get('/result/{departure_station}/{arrival_station}', 'JourneyController@show')->name('rslt');
Route::post('/cart/add', 'ShoppingController@add_to_cart')->name('cart.add');
Route::get('/cart', 'ShoppingController@cart')->name('cart');
Route::get('/cart/incr{id}/{qty}', 'ShoppingController@cart_incr')->name('cart.incr');
Route::get('/cart/decr/{id}/{qty}', 'ShoppingController@cart_decr')->name('cart.decr');
Route::get('email-verification/error', 'Auth\RegisterController@getVerificationError')->name('email-verification.error');
Route::get('email-verification/check/{token}', 'Auth\RegisterController@verifyUser')->name('email-verification.check');
Route::post('login', 'Auth\LoginController@login')->middleware('verified');
Route::put('/updateAuthUser','ProfileController@updateAuthUser')->name('update.user');
Route::get('/password','ProfileController@updatePassword')->name('edit.password');

Route::put('/updateAuthUserPassword','ProfileController@updateAuthUserPassword')->name('change.password');
Route::get('/profile','ProfileController@updateProfile')->name('update');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
