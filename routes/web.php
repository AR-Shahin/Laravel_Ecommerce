<?php

use Illuminate\Support\Facades\Route;

//Route::get('/home', 'HomeController@index')->name('home');
//Auth::routes();

#admin routes
Route::prefix('admin')->group(base_path('routes/admin.php'));

#Home Routes
Route::get('/','frontend\HomeController@index')->name('home');

#Product Routes
Route::get('/product/{slug}','frontend\ProductController@viewSingleProduct')->name('single.product');

#Cart Routes
Route::post('add-to-cart','frontend\CartController@addToCart')->name('add.cart');
Route::get('view-cart','frontend\CartController@viewCartProduct')->name('view.cart');
Route::post('update-cart','frontend\CartController@updateCartProduct')->name('update.cart');
Route::get('delete-cart/{id}','frontend\CartController@deleteCartProduct')->name('delete.cart');

#Customer Routes
Route::get('customer/login','frontend\LoginController@showLoginForm')->name('customer.login');
Route::post('customer/login','frontend\LoginController@login')->name('customer.login');
Route::get('customer/registration','frontend\CustomerController@showRegistrationForm')->name('customer.registration');
Route::post('customer/registration','frontend\CustomerController@customerStore')->name('customer.registration');
Route::get('customer/verify-account','frontend\CustomerController@showVerifyAccountForm')->name('customer.verify-account');
Route::get('customer/dashboard','frontend\CustomerController@dashboard')->name('customer.dashboard')->middleware('auth:customer');;
Route::get('logout', 'frontend\LoginController@logout')->name('customer.logout')->middleware('auth:customer');
