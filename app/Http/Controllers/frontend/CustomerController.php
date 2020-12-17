<?php

namespace App\Http\Controllers\frontend;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use function rand;
use function redirect;
use Intervention\Image\ImageManagerStatic as Image;
use function uniqid;

class CustomerController extends Controller
{
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
            Mail::send('frontend.email.verify-email',$data,function($message) use($data){
$message->from('ars@gmail.com','AR Shop');
$message->to($data['email']);
$message->subject('Verify Account');
            });
            Image::make($image)->save($last_image);
            return redirect()->route('customer.verify-account')->with('toast_success',$request->name. " Congratulations. Your Account has Created Successfully.Please verify Your Account.");
        }
    }

    public function dashboard(){
        return view('frontend.customer.dashboard',$this->data);
    }

    public function showVerifyAccountForm(){
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
}
