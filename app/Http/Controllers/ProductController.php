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

    // edit && update
    public function edit($id)
    {
        $product = \App\Product::find($id);
        
        return view('product.editProduct', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = \App\Product::find($id);
        $product->update($request->all());

        return redirect('/product')->with('sukses', 'Data berhasil diupdate');
    }

    // delete
    public function delete($id)
    {
        $product = \App\Product::find($id);
        $product->delete();

        return redirect('/product')->with('delete', 'Data berhasil dihapus');
    }
}
