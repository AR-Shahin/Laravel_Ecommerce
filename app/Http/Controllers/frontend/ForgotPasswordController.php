<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function showForgotPasswordForm(){
        return view('frontend.customer.forgot_password',$this->data);
    }
    public function showPasswordForm(){
        return view('frontend.customer.password',$this->data);
    }
}
