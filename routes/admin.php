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


