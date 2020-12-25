<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->data['main_menu'] = 'Dashboard';
        $this->data['sub_menu'] = '';
    }

    public function index(){
        return view('backend.dashboard',$this->data);
    }
}
