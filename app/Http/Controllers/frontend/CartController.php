<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function redirect;
use function view;
use App\SiteIdentity;
use App\SocialLink;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function __construct()
    {
        $this->data['links'] = SocialLink::get()->first();
        $this->data['site'] = SiteIdentity::get()->first();
    }
    public function addToCart(Request $request){
        $request->validate([
            'color_name' => 'required',
            'size_name' => 'required'
        ]);
        $product = Product::findorFail($request->id);
        if($product->quantity<$request->quantity){
            return redirect()->back()->with('toast_warning',"Sorry sir !This product is Available [".$product->quantity."]");
        }
        Cart::add([
            'id' => $product->id,
            'qty' => $request->quantity,
            'price' => $product->sell_price,
            'name' => $product->name,
            'weight' => 0,
            'options' => [
                'size_name' => $request->size_name,
                'color_name' => $request->color_name,
                'image' => $product->image,
            ]
        ]);

        return redirect()->route('view.cart')->with('toast_success',$product->name ." | Added Successfully!");
    }

    public function viewCartProduct(){
        if(Cart::count() == 0){
            return redirect()->route('home')->with('toast_warning',"Sorry! Your Cart is empty.Please Buy Something.");
        }
        return view('frontend.cart.view_cart',$this->data);
    }

    public function updateCartProduct(Request $request){
        $product =  Product::find($request->productId);
        if($product->quantity < $request->quantity){
            return redirect()->back()->with('toast_warning',"Sorry sir !This product is Available [".$product->quantity."]");
        }
        Cart::update($request->rowId, $request->quantity);
        return redirect()->back()->with('toast_success','Quantity Updated Successfully!');
    }

    public function deleteCartProduct($id){
        Cart::remove($id);
        return redirect()->back()->with('toast_success','Product deleted Successfully!');
    }

    public function clearCartProduct(){
        Cart::destroy();
        return redirect()->route('home')->with('toast_success','Cart Product has deleted Successfully!');
    }
}
