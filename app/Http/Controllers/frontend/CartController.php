<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Product;

use Illuminate\Http\Request;
use function redirect;
use function view;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
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
        return view('frontend.cart.view_cart');
    }

    public function updateCartProduct(Request $request){
        Cart::update($request->rowId, $request->quantity);
        return redirect()->back()->with('toast_success','Quantity Updated Successfully!');
    }

    public function deleteCartProduct($id){
        Cart::remove($id);
        return redirect()->back()->with('toast_success','Product deleted Successfully!');
    }
}
