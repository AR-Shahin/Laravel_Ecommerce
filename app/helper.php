<?php

use App\Order;
use App\Product;

 function getProductByCategoryId($id){
    return Product::where('category_id',$id)->latest()->get();;
}

function countCustomerOrder($id){
     return Order::where('customer_id',$id)->count();
}

