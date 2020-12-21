<?php

namespace App\Http\Controllers\frontend;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\Size;
use App\Tag;
use Illuminate\Http\Request;
use function view;

class ShopController extends Controller
{
    public function index(){
        $this->data['products'] = Product::with('category')->where('status',1)->latest()->get();
        $this->data['cats'] = Category::has('products')->latest()->get();
        $this->data['sizes'] = Size::all()->unique('name');
        $this->data['tags'] = Tag::all()->unique('tag');
        return view('frontend.shop',$this->data);
    }
}
