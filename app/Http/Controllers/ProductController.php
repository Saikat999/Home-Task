<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::get();
        return view('product.product',compact('products'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $products = Product::where('product_name', 'like', '%'.$search.'%')->get();
        return view('product.product', compact('products'));
    }

}
