<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeBillingaddressRequest;
use App\Order;
use App\Order_Details;
use App\Payment;
use App\Shipping_Address;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use function redirect;


class CheckoutController extends Controller
{
    public function showShippingAddressForm(){
        if(Session::get('shipping_id')){
            return redirect()->route('payment');
        }
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

    public function storeShippingAddress(storeBillingaddressRequest $request){
        $ship = new Shipping_Address();
        $ship->first_name = $request->firstname;
        $ship->last_name = $request->lastname;
        $ship->email = $request->email;
        $ship->phone = $request->phone;
        $ship->house = $request->house;
        $ship->address = $request->address;
        $ship->zip_code = $request->zip_code;
        $ship->city = $request->city;
        $ship->note = $request->note;
        $ship->customer_id = Auth::guard('customer')->user()->id;

        if($ship->save()){
            Session::put('shipping_id',$ship->id);
            return redirect()->route('payment')->with('toast_success',"Thanks ".Auth::guard('customer')->user()->name . ".Your Billing information has been saved.");
        }
    }

    public function storePaymentMethod(Request $request){
        $request->validate([
            'payment_method' =>['required']
        ]);
        if($request->payment_method == 'Bkash' && $request->transication_id == NULL){
            return redirect()->back()->with('toast_error','Please Enter transaction ID');
        }
        $payment = new Payment();
        $payment->payment_method = $request->payment_method;
        if($request->transication_id){
            $payment->transaction_id = $request->transication_id;
        }
        $payment->save();

        $order = new Order();
        $order->customer_id = Auth::guard('customer')->user()->id;
        $order->shipping_id = Session::get('shipping_id');
        $order->payment_id = $payment->id;

        $order_data = Order::orderBy('id','desc')->first();
        if($order_data == NULL){
            $firstReg = 0;
            $order_no = $firstReg + 1;
        }else{
            $order_data = Order::orderBy('id','desc')->first()->ordder_num;
            $order_no = $order_data +1;
        }
        $order->order_num = $order_no;
        $order->order_total = $request->order_total;
        $order->save();
        foreach (Cart::content() as $item){
            $od = new Order_Details();
            $od->order_id = $order->id;
            $od->product_id = $item->id;
            $od->color_name = $item->options->color_name;
            $od->size_name = $item->options->size_name;
            $od->quantity = $item->qty;
            DB::table('products')->decrement('quantity', $item->qty);
            $od->save();
        }

        Cart::destroy();
        Session::forget('shipping_id');
        return redirect()->route('customer.order-details')->with('toast_success','Dear '. Auth::guard('customer')->user()->name .".We've received your order.");
    }
}
