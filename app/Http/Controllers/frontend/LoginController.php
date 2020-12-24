<?php

namespace App\Http\Controllers\frontend;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function redirect;
use App\SocialLink;
use App\SiteIdentity;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::CUSTOMER_HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->data['links'] = SocialLink::get()->first();
        $this->data['site'] = SiteIdentity::get()->first();
        $this->middleware('guest:customer')->except('logout');
    }

    public function showLoginForm(){
        return view('frontend.customer.login',$this->data);
    }

    public function logout()
    {
        $this->guard('customer')->logout();
        return redirect('customer/login');
    }

    protected function guard()
    {
        return Auth::guard('customer');
    }

    public function login(Request $request)
    {
        $request->validate([
            "email" =>'required|email|exists:customers',
            "password" =>'required',
        ]);
        $check = Customer::where('email',$request->email)->first();
        if($check->status == 0){
            return redirect()->route('customer.verify-account')->with('toast_warning',$check->name. " Please verify Your Account.");
        }
        if(Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->intended('customer/dashboard');
        }
        return redirect()->route('customer.login')->with('toast_error',"Password Doesn't match");
    }
}
