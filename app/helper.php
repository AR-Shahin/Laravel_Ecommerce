<?php

use App\Order;
use App\Product;
use App\SiteIdentity;

function getProductByCategoryId($id){
    return Product::where('category_id',$id)->where('status',1)->latest()->get();
}

function countCustomerOrder($id){
    return Order::where('customer_id',$id)->where('status','!=',2)->count();
}

function getShopEmail(){
    return 'devshahin107@gmail.com';
}

function getSiteIdentity(){
    return SiteIdentity::get()->first();
}
