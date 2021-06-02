<?php

namespace App\Http\Controllers\backend;

use App\Category;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use function redirect;
use function ucwords;
use Intervention\Image\ImageManagerStatic as Image;
class CategoryController extends Controller
{
    public function __construct()
    {
        $this->data['main_menu'] = 'Product';
        $this->data['sub_menu'] = 'Cat';
    }
    public function index(){
        $this->data['categories'] = Category::latest()->get();
        return view('backend.category.index',$this->data);
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required','unique:categories'],
            'image' => ['required','mimes:jpg,jpeg,png'],
        ]);
        $image = $request->file('image');
        $ext = $image->extension();
        $name =  hexdec(uniqid()) . '.' .$ext;
        $last_image = 'uploads/category/'.$name;

        $cat = new Category();
        $cat->name = ucwords($request->name);
        $cat->image = $last_image;
        if($cat->save()){
            // Image::make($image)->resize(400,511)->save($last_image);
            $image->move(public_path('uploads/category/'), $last_image);
            return redirect()->back()->with('toast_success','Category Added Successfully!');
        }
    }

    public function update(Request $request,$id){

        $image = $request->file('image');
        if ($image) {
            $old_img = $request->old_img;
            $ext = $image->extension();
            $name =  hexdec(uniqid()) . '.' .$ext;
            $last_image = 'uploads/category/'.$name;

            $update = Category::findorFail($id)->update([
                'name' => ucwords($request->name),
                'image' => $last_image,
                'updated_at' => Carbon::now()
            ]);
            if($update){
                // Image::make($image)->resize(400,511)->save($last_image);
                $image->move(public_path('uploads/category/'), $last_image);
                if(file_exists($old_img)){
                    unlink($old_img);
                }
            }
        }else{
            $update = Category::findorFail($id)->update([
                'name' => ucwords($request->name),
                'updated_at' => Carbon::now()
            ]);
        }
        return redirect()->route('category.index')->with('success','Category Updated Successfully!');
    }

    public function show($id)
    {
        $del = Category::findorFail($id);
        if($del){
            if(file_exists($del->image)){
                unlink($del->image);
            }
            Category::findorFail($id)->delete();
            return redirect()->back();
        }
    }
}
