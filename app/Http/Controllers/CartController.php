<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
    	$product = Product::find($request->product_id);

    	Cart::add([
            'id' => $request->product_id,
            'name' => $product->product_name,
            'price' => $product->product_price,
            'qty' => $request->qty,
            'options' => [
              'image' => $product->product_image,
            ]
    		]);
    	return redirect('/cart/show');
    }

    public function showCart()
    {   
    	$cartProducts = Cart::content();
        

    	return view('frontend.cart.cart', ['cartProducts' => $cartProducts]);
    }

    public function deleteCart($id)
    {   
        $cartProducts = Cart::remove();
        
        return redirect('/cart/show');
    }

    public function updateCart(Request $request)
    {   
        $cartProducts = Cart::update($request->rowId, $request->quantity);
        
        return redirect('/cart/show');
    }


}
