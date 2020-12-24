<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use const true;

class ProductSize extends Model
{
    public function products(){
        return $this->hasMany(Product::class,'product_id','id');
    }
}
