<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::take(20)->get();
        $cartItems = \Cart::session(auth()->id())->getContent();
        $categories = Category::whereNull('parent_id')->get();
        // dd($categories);
        return view('home', get_defined_vars());
    }
}
