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



Route::get('test/{id}','frontend\HomeController@getProductByCategoryId');
