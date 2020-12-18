<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function shippingDetails(){
        return $this->belongsTo(Shipping_Address::class,'shipping_id','id');
    }
}
