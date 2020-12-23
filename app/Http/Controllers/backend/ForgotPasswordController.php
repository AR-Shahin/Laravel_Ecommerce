<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function redirect;
use function view;

class ForgotPasswordController extends Controller
{
    public function showForgotPasswordForm(){
        Session::put('forgot_password',1);
        return view('backend.admin.forgot');
    }
    public function showPasswordForm(){
        if(!Session::get('forgot_password')){
            return redirect()->back();
        }
        return view('backend.admin.password');
    }
}
