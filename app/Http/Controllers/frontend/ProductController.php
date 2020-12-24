<?php

namespace App\Http\Controllers\frontend;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use App\SocialLink;
use App\SiteIdentity;
use App\Size;
use App\Tag;
use function view;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->data['links'] = SocialLink::get()->first();
        $this->data['site'] = SiteIdentity::get()->first();
    }
    public function viewSingleProduct($slug){
        Product::where('slug',$slug)->increment('view');
        $this->data['product'] = Product::with('category','sizes','colors','tags','sliderImages')->where('slug',$slug)->first();
        $this->data['Rproducts'] = Product::where('category_id',$this->data['product']->category_id)
            ->where('id' ,'!=',$this->data['product']->id)
            ->take(5)
            ->where('status',1)
            ->inRandomOrder()
            ->get();
        return view('frontend.single_Product',$this->data);
    }

    public function categoryWiseProduct($cat){
        $this->data['thumb'] = $cat;
        $category = Category::where('name',$cat)->select('id')->first();
        if(!$category){
            return view('frontend.404',$this->data);
        }
        $this->data['products'] = Product::where('category_id',$category->id)->get();
        $this->data['cats'] = Category::has('products')->latest()->get();
        $max = Product::max('view');
        $min = $max -10;
        $this->data['top_products'] = Product::whereBetween('view', [$min, $max])
            ->where('status',1)
            ->take(5)
            ->inRandomOrder()
            ->get();
        $this->data['sizes'] = Size::all()->unique('name');
        $this->data['tags'] = Tag::all()->unique('tag');
        return view('frontend.shop',$this->data);
    }

    public function tagWiseProduct($tag){

    }
}
