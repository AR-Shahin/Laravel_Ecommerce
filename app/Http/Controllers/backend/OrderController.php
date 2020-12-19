<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use function view;

class OrderController extends Controller
{
    public function index(){
        $this->data['orders'] = Order::latest()->get();
        return view('backend.order.index',$this->data);
    }
    public function customerBillingInfo($id){
        $this->data['order'] = Order::findorFail($id);
        return view('backend.order.billing_info',$this->data);
    }

    public function showUnapprovedOrder(){
          $this->data['orders'] = Order::where('status',0)->latest()->get();
        return view('backend.order.unapproved',$this->data);
    }
}
