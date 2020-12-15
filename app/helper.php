<?php

use App\Product;

 function getProductByCategoryId($id){
    return Product::where('category_id',$id)->get();;
}
?>