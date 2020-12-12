<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Slider;
use function file;
use function file_exists;
use Illuminate\Routing\Route;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use function redirect;
use function ucwords;
use function unlink;
use Carbon\Carbon;
class SliderController extends Controller
{
    public function index(){
        $this->data['sliders'] = Slider::latest()->get();
        return view('backend.slider.index',$this->data);
    }

    public function create(){
        return view('backend.slider.create',$this->data);
    }
    public function store(Request $request){
        $request->validate([
            'text_1' => ['required','unique:sliders'],
            'text_2' => ['required'],
            'image' => ['required','mimes:jpg,png,jpeg'],
        ]);

        $image = $request->file('image');
        $ext = $image->extension();
        $name =  hexdec(uniqid()) . '.' .$ext;
        $last_image = 'uploads/slider/'.$name;

        $slider = new Slider();
        $slider->text_1 = ucwords($request->text_1);
        $slider->text_2 = ucwords($request->text_2);
        $slider->image = $last_image;
        if($slider->save()){
            Image::make($image)->resize(1920,900)->save($last_image);
        }
        return redirect()->back()->with('toast_success','Slider Added Successfully!');
    }

    public function inactiveSlider($id){
        $update = Slider::find($id);
        $update->status = 0;
        if($update->save()){
            return redirect()->back()->with('success','Slider Inactivated Successfully!');
        }
    }

    public function activeSlider($id){
        $update = Slider::find($id);
        $update->status = 1;
        if($update->save()){
            return redirect()->back()->with('success','Slider Activated Successfully!');
        }
    }

    public function deleteSlider($id){
        $del = Slider::findorFail($id);
        if($del){
            if(file_exists($del->image)){
                unlink($del->image);
            }
            Slider::findorFail($id)->delete();
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $image = $request->file('image');
        if ($image) {
            $old_img = $request->old_img;
            $ext = $image->extension();
            $name =  hexdec(uniqid()) . '.' .$ext;
            $last_image = 'uploads/slider/'.$name;

            $update = Slider::findorFail($id)->update([
                'text_1' => ucwords($request->text_1),
                'text_2' => ucwords($request->text_2),
                'image' => $last_image,
                'updated_at' => Carbon::now()
            ]);
            if($update){
                Image::make($image)->resize(1920,900)->save($last_image);
                if(file_exists($old_img)){
                    unlink($old_img);
                }
            }
        }else{
            $update = Slider::findorFail($id)->update([
                'text_1' => ucwords($request->text_1),
                'text_2' => ucwords($request->text_2),
                'updated_at' => Carbon::now()
            ]);
        }
        return redirect()->route('sliders.index')->with('success','Slider Updated Successfully!');
    }
}
