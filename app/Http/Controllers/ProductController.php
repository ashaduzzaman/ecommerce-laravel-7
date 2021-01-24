<?php

namespace App\Http\Controllers;

use Auth;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::user()){
            $cartItems = \Cart::session('_token')->getContent();
        }else{
            $cartItems = \Cart::session(auth()->id())->getContent();
        }

        $category_id = request('category_id');

        if($category_id){
            $category = Category::find($category_id);
            // $products = $category->products;
            $products = $category->allProducts();
        }else{
            $products = Product::take(10)->get();
        }

        return view('product.index', get_defined_vars());
    }

   public function search(Request $request)
   {
    //    dd($request->all());

       $search_query = $request->input('search');

       $products = Product::where('name', 'LIKE',"%$search_query%")->paginate(12);
       $cartItems = \Cart::session(auth()->id())->getContent();

       return view('product.catalog', compact('products','cartItems'));
   }

   public function show($id)
   {
        if(!Auth::user()){
            $cartItems = \Cart::session('_token')->getContent();
        }else{
            $cartItems = \Cart::session(auth()->id())->getContent();
        }

        $product = Product::findOrFail($id);



        dd($product);

       return view('product.product_details', get_defined_vars());
   }
}
