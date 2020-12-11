<?php

use Illuminate\Support\Facades\Route;

#admin routes
Route::prefix('admin')->group(base_path('routes/admin.php'));

Route::get('/', function () {
    return view('frontend.home');
});


Route::get('/sp', function () {
    return view('frontend.single_Product');
});
