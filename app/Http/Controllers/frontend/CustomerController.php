<?php

namespace App\Http\Controllers\frontend;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerStoreRequest;
use App\Order;
use App\Order_Details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\ImageManagerStatic as Image;
use function rand;
use function redirect;
use function uniqid;
use App\SocialLink;
use App\SiteIdentity;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->data['links'] = SocialLink::get()->first();
        $this->data['site'] = SiteIdentity::get()->first();
    }
    public function showRegistrationForm(){
        return view('frontend.customer.registration',$this->data);
    }
    public function customerStore(CustomerStoreRequest $request){
        $image = $request->file('image');
        $ext = $image->extension();
        $name =  hexdec(uniqid()) . '.' .$ext;
        $last_image = 'uploads/customer/'.$name;
        $formData =  $request->all();
        $formData['password'] = Hash::make($request->password);
        $formData['status'] = 0 ;
        $formData['code'] = rand(100,9999);
        $formData['image'] = $last_image ;
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'code' => $formData['code'],
        );
        if(Customer::create($formData)){
           /* Mail::send('frontend.email.verify-email',$data,function($message) use($data){
                $message->from('ars@gmail.com','AR Shop');
                $message->to($data['email']);
                $message->subject('Verify Account');
            });*/
            Image::make($image)->save($last_image);
            return redirect()->route('customer.verify-account')->with('toast_success',$request->name. " Congratulations. Your Account has Created Successfully.Please verify Your Account.");
        }
    }

    public function dashboard(){
        $this->data['cus_menu'] = 'Home';
        return view('frontend.customer.dashboard',$this->data);
    }

    public function showVerifyAccountForm(){
      if(Auth::guard('customer')->check()){
          return redirect()->back();
      }
        return view('frontend.customer.verify_account',$this->data);
    }

    public function customerEmailVerifyByCode(Request $request){
        $request->validate([
            "email" =>'required|email|exists:customers',
            "code" =>'required|numeric',
        ]);

        $checkData = Customer::where('email',$request->email)->where('code',$request->code)->first();

        if($checkData){
            $checkData->status = 1;
            $checkData->save();
            return redirect()->route('customer.login')->with('toast_success',$checkData->name. " Congratulations. Your Account has Verified Successfully.Please Login.");
        }else{
            return redirect()->back()->with('toast_error','Invalid Verification Code!');
        }
    }

    public function showCustomerProfile(){
        $this->data['cus_menu'] = 'Profile';
        return view('frontend.customer.profile',$this->data);
    }

    public function showCustomerOrderDetails(){
        $this->data['cus_menu'] = 'Order';
        $this->data['orders'] = Order::with('shippingDetails')->where('status','!=',2)->where('customer_id',Auth::guard('customer')->user()->id)->latest()->get();
        return view('frontend.customer.order_details',$this->data);
    }

    public function viewCustomerOrder($id)
    {
        $order = Order::where('id', $id)->where('customer_id', Auth::guard('customer')->user()->id)->first();
        if ($order) {
            $this->data['cus_menu'] = 'Order';

            //  $this->data['orders'] = Order_Details::with('product')->where('order_id', $id)->latest()->get();
            $this->data['order'] = Order::with('customerOrders','shippingDetails')->find($id);

            /*$this->data['order_id'] = [
                ''
            ];*/
            return view('frontend.customer.single_order_details',$this->data);
        } else {
            return redirect()->back()->with('toast_info', Auth::guard('customer')->user()->name . ". Don't try to be over smart.");
        }
    }

    public function orderRemove($id){
        $update = Order::find($id)->update([
            'status' =>2,
        ]);
        if($update){
            return redirect()->back()->with('toast_success','Order Removed Successfully!');
        }
    }
}
