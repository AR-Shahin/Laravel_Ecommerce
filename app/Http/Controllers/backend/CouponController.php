<?php

namespace App\Http\Controllers\backend;

use App\Coupon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function redirect;
use function strtoupper;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->data['main_menu'] = 'Product';
        $this->data['sub_menu'] = 'Coupon';
    }
    public function index(){
        $this->data['coupons'] = Coupon::latest()->get();
        return view('backend.coupon.index',$this->data);
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required','unique:coupons'],
            'discount' => ['required',],
        ]);

        $size = new Coupon();
        $size->name = strtoupper($request->name);
        $size->discount = $request->discount;
        if($size->save()){
            return redirect()->back()->with('toast_success','New Coupon Added! ['.$request->name.']');
        }
    }

    public function update(Request $request,$id){
        $size = Coupon::find($id)->update([
            'name' => ucwords($request->name),
            'discount' => $request->discount
        ]);
        if($size){
            return redirect()->back()->with('toast_success','Coupon name Updated! ['.$request->name.']');
        }
    }

    public function delete(Request $request){
        $del = Coupon::find($request->id)->delete();
        if($del){
            return redirect()->back();
        }
    }

    public function inactive(Request $request,$id){
        $size = Coupon::find($id)->update([
            'status' => 0,
        ]);
        return redirect()->back();
    }
    public function active(Request $request,$id){
        $size = Coupon::find($id)->update([
            'status' => 1,
        ]);
        return redirect()->back();
    }
}
