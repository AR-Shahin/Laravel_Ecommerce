<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use function redirect;
use function view;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->data['main_menu'] = 'Order';
        $this->data['sub_menu'] = 'Manage_Order';
    }
    public function index(){
        $this->data['orders'] = Order::latest()->get();
        $this->data['sub_menu'] = 'Manage_Order';
        return view('backend.order.index',$this->data);
    }
    public function customerBillingInfo($id){
        $this->data['order'] = Order::findorFail($id);
        return view('backend.order.billing_info',$this->data);
    }

    public function showUnapprovedOrder(){
        $this->data['sub_menu'] = 'New_Order';
          $this->data['orders'] = Order::where('status',0)->latest()->get();
        return view('backend.order.unapproved',$this->data);
    }

    public function approveNewOrder($id){
        $update = Order::find($id)->update([
            'status' =>1,
        ]);
        if($update){
            return redirect()->back()->with('toast_success','Order Approved Successfully!');
        }
    }

}
