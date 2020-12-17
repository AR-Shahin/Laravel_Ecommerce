<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use function redirect;

class CheckoutController extends Controller
{
    public function showShippingAddressForm(){
        if(Cart::count() == 0){
            return redirect()->route('home')->with('toast_warning',"Sorry! Your Cart is empty.Please Buy Something.");
        }
        return view('frontend.cart.shipping_form',$this->data);
    }

    public function showPaymentMethodForm(){
        if(Cart::count() == 0){
            return redirect()->route('home')->with('toast_warning',"Sorry! Your Cart is empty.Please Buy Something.");
        }
        return view('frontend.cart.payment',$this->data);
    }
}
