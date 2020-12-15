<?php

namespace App\Http\Controllers\frontend;

use App\Category;
use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;
use App\Product;
class HomeController extends Controller
{
    public function index(){
        $this->data['sliders'] = Slider::where('status',1)->latest()->get();
        $this->data['cats'] = Category::has('products')->get();
        $this->data['products'] = Product::where('status',1)->latest()->get();
        return view('frontend.home',$this->data);
    }

    public function getProductByCategoryId($id){
        return Product::where('category_id',$id)->get();;
    }
}
