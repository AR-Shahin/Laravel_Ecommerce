<?php

namespace App\Http\Controllers\backend;

use App\Category;
use App\Color;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductAddRequest;
use App\Product;
use App\ProductColor;
use App\ProductSize;
use App\Size;
use App\SliderImage;
use App\Tag;
use function base64_decode;
use function base64_encode;
use function file_exists;
use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;
use function redirect;
use function ucwords;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use function unlink;

class ProductController extends Controller
{
    public function index(){
        $this->data['products'] = Product::with('category','sizes','colors')->latest()->get();
        return view('backend.product.index',$this->data);
    }

    public function create(){
        $this->data['cats'] = Category::latest()->get();
        $this->data['sizes'] = Size::latest()->get();
        $this->data['colors'] = Color::latest()->get();
        return view('backend.product.create',$this->data);
    }

    public function store(Request $request){
        $main_image = $request->file('image');
        $hover_image = $request->file('hover_image');
        $m_ext = $main_image->extension();
        $h_ext = $hover_image->extension();
        $name_main =  hexdec(uniqid()) . '.' .$m_ext;
        $hover_main =  hexdec(uniqid()) . '.' .$h_ext;
        $last_main_image = 'uploads/product/'.$name_main;
        $last_hover_image = 'uploads/product/'.$hover_main;


        $product = new Product();
        $product->name = ucwords($request->name);
        $product->slug = Str::slug($request->name,'-');;
        $product->category_id = $request->cat_id;
        $product->price = $request->price;
        $product->sell_price = $request->sell_price;
        $product->quantity = $request->quantity;
        $product->view = 0;
        $product->image = $last_main_image;
        $product->hover_image = $last_hover_image;
        $product->short_des = $request->short_des;
        $product->long_des = $request->long_des;

        if($product->save()){
            Image::make($main_image)->resize(860,1200)->save($last_main_image);
            Image::make($hover_image)->resize(860,1200)->save($last_hover_image);
            $id = $product->id;

            $slider_Images = $request->slider_images;
            foreach ($slider_Images as $image) {
                $main_image = $image;
                $m_ext = $main_image->extension();
                $name_main =  hexdec(uniqid()) . '.' .$m_ext;
                $last_main_image = 'uploads/product/slider/'.$name_main;

                $sliderImage = new SliderImage();
                $sliderImage->product_id = $id;
                $sliderImage->image = $last_main_image;

                if($sliderImage->save()){
                    Image::make($main_image)->resize(860,1200)->save($last_main_image);
                }
            }

            //size
            $sizes = $request->size_id;
            foreach ($sizes as $size) {
                $pSize = new ProductSize();
                $pSize->product_id = $id;
                $pSize->size_name = $size;
                $pSize->save();
            }

            //color
            $colors = $request->color_id;
            foreach ($colors as $color) {
                $pColor = new ProductColor();
                $pColor->product_id = $id;
                $pColor->color_name = $color;
                $pColor->save();
            }
            //tag
            $tags = $request->tag;
            $Tags =  explode(" ",$tags);
            foreach ($Tags as $t){
                $tag = new Tag();
                $tag->product_id = $id;
                $tag->tag = strtoupper($t);
                $tag->save();
            }
        }//main if
        return redirect()->back()->with('toast_success','Product Added Successfully!');
    }

    public function show($id){
        $this->data['product'] = Product::with('category','colors','sizes','sliderImages','tags')->findorFail($id);

        // return $this->data['product']->sliderImages;

        return view('backend.product.show',$this->data);
    }

    public function delete($id){
        $tags = Tag::where('product_id',$id)->get();
        $sliderImages = SliderImage::where('product_id',$id)->get();
        $colors = ProductColor::where('product_id',$id)->get();
        $sizes = ProductSize::where('product_id',$id)->get();
        $product = Product::find($id);
        $img = $product->image;
        $hover_img = $product->hover_image;

        foreach ($tags as $oldTag){
            Tag::where('product_id',$id)->delete();
        }

        foreach ($colors as $color){
            ProductColor::where('product_id',$id)->delete();
        }

        foreach ($sizes as $size){
            ProductSize::where('product_id',$id)->delete();
        }
        foreach ($sliderImages as $sliderImage){
            if(file_exists($sliderImage->image)){
                unlink($sliderImage->image);
            }
            SliderImage::where('product_id',$id)->delete();
        }


        if($product->delete()){
            if (file_exists($img)){
                unlink($img);
            }
            if (file_exists($hover_img)){
                unlink($hover_img);
            }

            return redirect()->back()->with('success','Product deleted successfully!');
        }
    }

}
