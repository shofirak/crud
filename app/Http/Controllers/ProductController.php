<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() 
    {
        $product = \App\Product::paginate(5);

        return view('product.dataProduct', compact('product'));
    }
}
