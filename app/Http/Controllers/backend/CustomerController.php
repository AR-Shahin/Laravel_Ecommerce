<?php

namespace App\Http\Controllers\backend;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function view;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->data['main_menu'] = 'Customer';
    }
    public function index(){
        $this->data['sub_menu'] = 'manage_cus';
        $this->data['customers'] = Customer::with('orders')->latest()->get();
        return view('backend.customer.index',$this->data);
    }

    public function draftCustomer(){
        $this->data['sub_menu'] = 'draft_cus';
        $this->data['customers'] = Customer::where('status',0)->latest()->get();
        return view('backend.customer.draft',$this->data);
    }

    public function delete($id){
        $del = Customer::findorFail($id);
        if($del){
            if(file_exists($del->image)){
                unlink($del->image);
            }
            Customer::findorFail($id)->delete();
            return redirect()->back()->with('toast_success','Deleted!');
        }
    }
}
