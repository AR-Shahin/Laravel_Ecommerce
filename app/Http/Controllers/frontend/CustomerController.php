<?php

namespace App\Http\Controllers\frontend;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

        if(Customer::create($formData)){
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
}
