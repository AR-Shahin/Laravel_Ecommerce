<?php

namespace App\Http\Controllers\frontend;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\SiteIdentity;
use App\Size;
use App\Tag;
use Illuminate\Http\Request;
use function view;
use App\SocialLink;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->data['links'] = SocialLink::get()->first();
        $this->data['site'] = SiteIdentity::get()->first();
    }
    public function index(){
        $this->data['products'] = Product::with('category')->where('status',1)->latest()->get();
        $this->data['cats'] = Category::has('products')->latest()->get();
        $this->data['sizes'] = Size::all()->unique('name');
        $this->data['tags'] = Tag::all()->unique('tag');
          $max = Product::max('view');
          $min = $max -10;
         $this->data['top_products'] = Product::whereBetween('view', [$min, $max])
            ->where('status',1)
            ->take(5)
            ->inRandomOrder()
            ->get();
         $this->data['thumb'] = 'Shop';
        return view('frontend.shop',$this->data);
    }
}
