<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\SiteIdentity;
use function file_exists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function redirect;
use function view;
use Intervention\Image\ImageManagerStatic as Image;

class SiteIdentityController extends Controller
{
    public function __construct()
    {
        $this->data['main_menu'] = 'Site';
        $this->data['sub_menu'] = 'logo';
    }
    public function index(){
        $this->data['SiteIdentity'] = SiteIdentity::get();
        $this->data['count'] = SiteIdentity::count('id');
        Session::put('site_count',$this->data['count']);
        return view('backend.site.index',$this->data);
    }

    public function showSiteIdentityForm(){
        if(Session::get('site_count') == 1){
            return redirect()->back();
        }
        return view('backend.site.create',$this->data);
    }

    public function storeSiteIdentityData(Request $request){
        $request->validate([
            'currency' =>'required',
            'top_text' =>'required',
            'footer_text' =>'required',
            'address' =>'required',
            'logo' =>['required','mimes:png'],
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

    public function updateSiteIdentityForm(){
        if(Session::get('site_count') == 0){
            return redirect()->back();
        }
        $this->data['site'] = SiteIdentity::get()->first();
        return view('backend.site.update',$this->data);
    }

    public function updateSiteIdentityData(Request $request){
        $logo = $request->file('logo');
        if ($logo) {
            $request->validate([
                'logo' => ['mimes:png']
            ]);
            $logo = $request->file('logo');
            $logo_ext = $logo->extension();
            $name_gen = hexdec(uniqid()) . '.' . $logo_ext;
            $last_image = 'uploads/site/' . $name_gen;
            $upload = 'uploads/site/';
            $site = SiteIdentity::find($request->id);
            $site->logo = $last_image;
            $site->footer_text = $request->footer_text;
            $site->top_text = $request->top_text;
            $site->currency = $request->currency;
            $site->address = $request->address;
            if ($site->save()) {
                $logo->move($upload, $name_gen);
                if(file_exists($request->old_img)){unlink($request->old_img);}
                return redirect()->route('site.identity')->with('toast_success','Identity Updated');
            }
        } else {
            $site = SiteIdentity::find($request->id);
            $site->footer_text = $request->footer_text;
            $site->top_text = $request->top_text;
            $site->currency = $request->currency;
            $site->address = $request->address;
            if ($site->save()) {
                return redirect()->route('site.identity')->with('toast_success','Identity Updated');
            }
            return $request->all();
        }
    }

}
