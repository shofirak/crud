<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // tampil data
    public function index() 
    {
        $product = \App\Product::paginate(5);

        return view('product.dataProduct', compact('product'));
    }

    // insert data
    public function add(Request $request)
    {
        \App\Product::create($request->all());

        return redirect('/product')->with('sukses', 'Data Berhasil diinput');
    }
}
