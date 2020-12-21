<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\SiteIdentity;
use Illuminate\Http\Request;
use function redirect;
use function view;
use Intervention\Image\ImageManagerStatic as Image;

class SiteIdentityController extends Controller
{
    public function index(){
        $this->data['SiteIdentity'] = SiteIdentity::get();
        return view('backend.site.index',$this->data);
    }

    public function showSiteIdentityForm(){
        return view('backend.site.create',$this->data);
    }

    public function storeSiteIdentityData(Request $request){
        $request->validate([
            'currency' =>'required',
            'top_text' =>'required',
            'footer_text' =>'required',
            'address' =>'required',
            'logo' =>'required',
        ]);
        $image = $request->file('logo');
        $ext = $image->extension();
        $name =  hexdec(uniqid()) . '.' .$ext;
        $last_image = 'uploads/site/'.$name;

        $formData = $request->all();
        $formData['logo'] = $last_image;

        if(SiteIdentity::create($formData)){
            Image::make($image)->save($last_image);
            return redirect()->route('site.identity')->with('toast_success','Data Added Successfully');
        }

    }
}
