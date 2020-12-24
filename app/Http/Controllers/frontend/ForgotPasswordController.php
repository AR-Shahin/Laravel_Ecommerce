<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SocialLink;
use App\SiteIdentity;
class ForgotPasswordController extends Controller
{
    public function __construct()
    {
        $this->data['links'] = SocialLink::get()->first();
        $this->data['site'] = SiteIdentity::get()->first();
    }
    public function showForgotPasswordForm(){
        return view('frontend.customer.forgot_password',$this->data);
    }
    public function showPasswordForm(){
        return view('frontend.customer.password',$this->data);
    }
}
