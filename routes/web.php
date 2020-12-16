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


Route::get('test/{id}','frontend\HomeController@getProductByCategoryId');
