<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function shippingDetails(){
        return $this->belongsTo(Shipping_Address::class,'shipping_id','id');
    }
    public function customerOrders(){
        return $this->hasMany(Order_Details::class);
    }
    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
    public function payment(){
        return $this->belongsTo(Payment::class,'payment_id','id');
    }

}
