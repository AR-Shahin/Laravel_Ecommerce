<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function view;
use App\SocialLink;

class SocialLinkController extends Controller
{
    public function __construct()
    {
        $this->data['main_menu'] = 'Site';
        $this->data['sub_menu'] = 'link';
    }
    public function index(){
        $this->data['count'] = SocialLink::count();
        $this->data['links'] = SocialLink::get();
        $this->data['link'] = SocialLink::get()->first();
        return view('backend.site.social_links',$this->data);
    }
    public function store(Request $request){
        $request->validate([
            'phone' => 'required',
            'email' => 'required',
            'fb' => 'required',
            'tw' => 'required',
            'insta' => 'required',
            'you' => 'required',
            'pin' => 'required'
        ]);

        $formData =  $request->all();
        if(SocialLink::create($formData)){
            return redirect()->back()->with('toast_success','Links added!');
        }
    }

    public function update(Request $request){
        $up = SocialLink::find($request->id)->update($request->all());
        if($up){
            return redirect()->back()->with('toast_success','Links updated!');
        }
    }
}
