<?php


Route::get('dashboard','backend\DashboardController@index')->name('dashboard')->middleware('auth:web');

#admin Routes
Route::get('login','backend\LoginController@showLoginForm')->name('admin.login');
Route::post('login','backend\LoginController@login')->name('admin.login');
Route::get('forgot-password','backend\ForgotPasswordController@showForgotPasswordForm')->name('forgot.password');
Route::get('password','backend\ForgotPasswordController@showPasswordForm')->name('password');

Route::middleware(['auth:web'])->group(function () {
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

    #Coupon Routes
    Route::get('coupon/index', 'backend\CouponController@index')->name('coupon.index');
    Route::post('coupon/store', 'backend\CouponController@store')->name('coupon.store');
    Route::put('coupon/update/{id}', 'backend\CouponController@update')->name('coupon.update');
    Route::post('coupon/delete/{id}', 'backend\CouponController@delete')->name('coupon.delete');

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

    #Order Routes
    Route::get('order/index', 'backend\OrderController@index')->name('order.index');
    Route::get('order/unapproved', 'backend\OrderController@showUnapprovedOrder')->name('order.unapproved');
    Route::get('billing-info/{id}', 'backend\OrderController@customerBillingInfo')->name('billing.info');
    Route::get('approved-order/{id}', 'backend\OrderController@approveNewOrder')->name('approved.order');

    #Site Identity Routes
    Route::get('site-identity','backend\SiteIdentityController@index')->name('site.identity');
    Route::get('add-site-identity','backend\SiteIdentityController@showSiteIdentityForm')->name('add-site-identity');
    Route::post('add-site-identity','backend\SiteIdentityController@storeSiteIdentityData')->name('add-site-identity');
    Route::get('update-site-identity','backend\SiteIdentityController@updateSiteIdentityForm')->name('update-site-identity');
    Route::post('up-site-identity','backend\SiteIdentityController@updateSiteIdentityData')->name('up-site-identity');

    #Social Links Routes
    Route::get('social-links','backend\SocialLinkController@index')->name('social-links');
    Route::post('social-links','backend\SocialLinkController@store')->name('social-links');
    Route::post('social-links-update','backend\SocialLinkController@update')->name('social-links.update');

    #Customer Routes
    Route::get('customers','backend\CustomerController@index')->name('customers');
    Route::get('draft-customers','backend\CustomerController@draftCustomer')->name('draft.customers');
    Route::get('delete-draft/{id}','backend\CustomerController@delete')->name('delete-draft');

    #Admin Routes
    Route::get('index','backend\AdminController@index')->name('admin.index');
    Route::get('create','backend\AdminController@create')->name('admin.create');
    Route::post('create','backend\AdminController@storeNewAdmin')->name('admin.store');
    Route::get('update','backend\AdminController@update')->name('admin.update');
    Route::post('update','backend\AdminController@updateProfile')->name('admin.update');
    Route::post('change/password','backend\AdminController@changePassword')->name('admin.change.password');
    Route::get('profile','backend\AdminController@profile')->name('profile');
    Route::get('block/{id}','backend\AdminController@blockAdmin')->name('admin.block');
    Route::get('unblock/{id}','backend\AdminController@unblockAdmin')->name('admin.unblock');
    Route::get('promote/{id}','backend\AdminController@promoteAdmin')->name('admin.promote');
    Route::get('demote/{id}','backend\AdminController@demoteAdmin')->name('admin.demote');
    Route::get('delete/{id}','backend\AdminController@deleteAdmin')->name('admin.delete');
});




