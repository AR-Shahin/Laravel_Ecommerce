<?php

use App\Order;
use App\Product;
use App\SiteIdentity;

function getProductByCategoryId($id){
    return Product::where('category_id',$id)->latest()->get();;
}

function countCustomerOrder($id){
    return Order::where('customer_id',$id)->count();
}

function getShopEmail(){
    return 'devshahin107@gmail.com';
}

function getSiteIdentity(){
    return SiteIdentity::get()->first();
}
