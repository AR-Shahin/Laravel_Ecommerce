<?php

use Illuminate\Support\Facades\Route;

#admin routes
Route::prefix('admin')->group(base_path('routes/admin.php'));

#Home Routes
Route::get('/','frontend\HomeController@index')->name('home');
Route::get('shop','frontend\ShopController@index')->name('shop');

#Product Routes
Route::get('/product/{slug}','frontend\ProductController@viewSingleProduct')->name('single.product');
Route::get('/category/{category}','frontend\ProductController@categoryWiseProduct')->name('category.products');
Route::get('/tag/{tag}','frontend\ProductController@tagWiseProduct')->name('tag.products');
Route::get('/size/{size}','frontend\ProductController@sizeWiseProduct')->name('size.products');

#Cart Routes
Route::post('add-to-cart','frontend\CartController@addToCart')->name('add.cart');
Route::get('view-cart','frontend\CartController@viewCartProduct')->name('view.cart');
Route::get('clear-cart','frontend\CartController@clearCartProduct')->name('clear.cart');
Route::post('update-cart','frontend\CartController@updateCartProduct')->name('update.cart');
Route::get('delete-cart/{id}','frontend\CartController@deleteCartProduct')->name('delete.cart');

#Customer Routes
Route::get('customer/login','frontend\LoginController@showLoginForm')->name('customer.login');
Route::post('customer/login','frontend\LoginController@login')->name('customer.login');
Route::get('customer/registration','frontend\CustomerController@showRegistrationForm')->name('customer.registration');
Route::post('customer/registration','frontend\CustomerController@customerStore')->name('customer.registration');
Route::get('customer/verify-account','frontend\CustomerController@showVerifyAccountForm')->name('customer.verify-account');
Route::post('customer/verify-account','frontend\CustomerController@customerEmailVerifyByCode')->name('customer.verify-account');


Route::get('customer/password','frontend\ForgotPasswordController@showForgotPasswordForm')->name('customer.password');
Route::get('customer/new-password','frontend\ForgotPasswordController@showPasswordForm')->name('customer.new-password');

Route::middleware(['auth:customer'])->group(function () {
    #profile
    Route::get('customer/dashboard', 'frontend\CustomerController@dashboard')->name('customer.dashboard');
    Route::get('customer/profile', 'frontend\CustomerController@showCustomerProfile')->name('customer.profile');
    Route::get('customer/order-details', 'frontend\CustomerController@showCustomerOrderDetails')->name('customer.order-details');
    Route::get('logout', 'frontend\LoginController@logout')->name('customer.logout');

    #checkout
    Route::get('shipping/address','frontend\CheckoutController@showShippingAddressForm')->name('shipping.form');
    Route::post('shipping/address','frontend\CheckoutController@storeShippingAddress')->name('shipping.form');
    Route::get('payment','frontend\CheckoutController@showPaymentMethodForm')->name('payment');
    Route::post('payment','frontend\CheckoutController@storePaymentMethod')->name('payment');
    Route::get('view-order/{id}','frontend\CustomerController@viewCustomerOrder')->name('view.order');
    Route::get('make-pdf/{id}','frontend\PdfController@makeInvoicePdf')->name('invoice.pdf');
    Route::get('order.remove/{id}','frontend\CustomerController@orderRemove')->name('order.remove');
});

Route::get('test',function (){
    return view('frontend.email.order-email');
});

#coupon routes
Route::post('set-coupon','frontend\CartController@setCoupon')->name('set-coupon');
Route::get('remove-coupon','frontend\CartController@removeCoupon')->name('remove-coupon');






