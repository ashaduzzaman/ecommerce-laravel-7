<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public static function add(Product $product, Request $request)
    {

        // dd($product);
        // dd($request->all());
        $product_quantity = 1;
        if($request->has('quanttity')){
            $product_quantity = $request['quanttity'];
        }
        $userID = auth()->id();
        if($product->is_sale){
            $product_price = $product->sale_price;
        }else{
            $product_price = $product->price;
        }
        // add the product to cart
        \Cart::session($userID)->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product_price,
            'quantity' => $product_quantity,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        return redirect()->route('cart.index');
    }

    public function index()
    {
        $cartItems = \Cart::session(auth()->id())->getContent();
        // foreach($cartItems as $cartItem){
        //     dd($cartItem['associatedModel']->cover_img);
        // }
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

    public function applyCoupon()
    {
        $couponcode = request('coupon_code');

        $couponData = Coupon::where('code', $couponcode)->first();

        if(!$couponData){
            return back()->withMessage('Sorry! coupon does not exist');
        }
        // dd($couponData);
        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => $couponData->name,
            'type' => $couponData->type,
            'target' => 'total', // this condition will be applied to cart's subtotal when getSubTotal() is called.
            'value' => $couponData->value,
        ));

        // Cart::condition($condition);
        \Cart::session(auth()->id())->condition($condition); // for a speicifc user's cart

        return back()->withMessage('Coupon applied');

    }
}
