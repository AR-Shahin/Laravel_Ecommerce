<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function view;

class OrderController extends Controller
{
    public function index(){
        $this->data['orders'] = 1;
        return view('backend.order.index',$this->data);
    }
}
