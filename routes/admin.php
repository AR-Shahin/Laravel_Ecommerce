<?php


Route::get('dashboard','backend\DashboardController@index')->name('dashboard')->middleware('auth');

#admin Routes
Route::get('login','backend\LoginController@showLoginForm')->name('admin.login');
Route::post('login','backend\LoginController@login')->name('admin.login');

Route::middleware(['auth'])->group(function () {
    Route::get('logout', 'backend\LoginController@logout')->name('admin.logout')->middleware('auth');

#slider routes
    Route::get('slider/index', 'backend\SliderController@index')->name('sliders.index');
    Route::get('slider/create', 'backend\SliderController@create')->name('slider.create');
    Route::post('slider/store', 'backend\SliderController@store')->name('slider.store');
    Route::post('slider/update/{id}', 'backend\SliderController@update')->name('slider.update');
    Route::get('slider/inactive/{id}', 'backend\SliderController@inactiveSlider')->name('inactive.slider');
    Route::get('slider/active/{id}', 'backend\SliderController@activeSlider')->name('active.slider');
    Route::get('slider/delete/{id}', 'backend\SliderController@deleteSlider')->name('slider.delete');

#Category Routes
    Route::resource('category', 'backend\CategoryController')->except(['create', 'show']);

#Size Routes
    Route::get('size/index', 'backend\SizeController@index')->name('size.index');
    Route::post('size/store', 'backend\SizeController@store')->name('size.store');
    Route::put('size/update/{id}', 'backend\SizeController@update')->name('size.update');
    Route::get('size/delete/{id}', 'backend\SizeController@delete')->name('size.delete');

#Color Routes
    Route::get('color/index', 'backend\ColorController@index')->name('color.index');
    Route::post('color/store', 'backend\ColorController@store')->name('color.store');
    Route::put('color/update/{id}', 'backend\ColorController@update')->name('color.update');
    Route::get('color/delete/{id}', 'backend\ColorController@delete')->name('color.delete');

#Product Routes
    Route::get('product/index', 'backend\ProductController@index')->name('product.index');
    Route::get('product/create', 'backend\ProductController@create')->name('product.create');
    Route::post('product/create', 'backend\ProductController@store')->name('product.store');
    Route::get('product/show/{id}', 'backend\ProductController@show')->name('product.show');
    Route::get('product/edit/{id}', 'backend\ProductController@edit')->name('product.edit');
    Route::post('product/update/{id}', 'backend\ProductController@update')->name('product.update');
    Route::get('product/delete/{id}', 'backend\ProductController@delete')->name('product.delete');
    Route::get('product/inactive/{id}', 'backend\ProductController@inactiveProduct')->name('inactive.product');
    Route::get('product/active/{id}', 'backend\ProductController@activeProduct')->name('active.product');
    Route::get('product/inactive/{id}', 'backend\ProductController@InactiveProduct')->name('inactive.product');

});



