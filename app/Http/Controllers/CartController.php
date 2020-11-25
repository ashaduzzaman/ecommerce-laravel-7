<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public static function add(Product $product)
    {
        $userID = auth()->id();
        // add the product to cart
        \Cart::session($userID)->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 4,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        return redirect()->route('cart.index');
    }

    public function index()
    {
        $cartItems = \Cart::session(auth()->id())->getContent();
        return view('cart.index', get_defined_vars());
    }

    public function destroy($itemId)
    {
        $userID = auth()->id();
        \Cart::session($userID)->remove($itemId);

        return back();
    }

    public function update(Request $request)
    {
        $userID = auth()->id();
        foreach($request->quant as $key => $value){
            \Cart::session($userID)->update($key,[
                'quantity' => array(
                    'relative' => false,
                    'value' => $value
                )
            ]);
        }

        return back();
    }

    public function checkout()
    {
        return view('cart.checkout');
    }
}
