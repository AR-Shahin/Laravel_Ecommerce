<?php



Route::get('dashboard','backend\DashboardController@index')->name('dashboard');

#slider routes
Route::get('slider/index','backend\SliderController@index')->name('sliders.index');
Route::get('slider/create','backend\SliderController@create')->name('slider.create');
Route::post('slider/store','backend\SliderController@store')->name('slider.store');
Route::post('slider/update/{id}','backend\SliderController@update')->name('slider.update');
Route::get('slider/inactive/{id}','backend\SliderController@inactiveSlider')->name('inactive.slider');
Route::get('slider/active/{id}','backend\SliderController@activeSlider')->name('active.slider');
Route::get('slider/delete/{id}','backend\SliderController@deleteSlider')->name('slider.delete');

#Category Routes
Route::resource('category','backend\CategoryController')->except(['create','show']);

#Size Routes
Route::get('size/index','backend\SizeController@index')->name('size.index');
Route::post('size/store','backend\SizeController@store')->name('size.store');
Route::put('size/update/{id}','backend\SizeController@update')->name('size.update');
Route::get('size/delete/{id}','backend\SizeController@delete')->name('size.delete');

#Color Routes
Route::get('color/index','backend\ColorController@index')->name('color.index');
Route::post('color/store','backend\ColorController@store')->name('color.store');
Route::put('color/update/{id}','backend\ColorController@update')->name('color.update');
Route::get('color/delete/{id}','backend\ColorController@delete')->name('color.delete');


