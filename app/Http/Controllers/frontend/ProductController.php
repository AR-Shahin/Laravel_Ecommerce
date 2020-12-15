<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
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
}
