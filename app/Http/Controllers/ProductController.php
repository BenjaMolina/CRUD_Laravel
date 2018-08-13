<?php

namespace App\Http\Controllers;
use App\Product;
use App\Http\Requests\ProductRequest;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->paginate();
        return view('products.index',compact('products'));
       
    }

    public function show($id) 
    {
        $product = Product::findOrFail($id);
        return view('products.show',compact('product'));
    }

    public function destroy($id)
    {
        
        $product = Product::findOrFail($id);
        $product->delete();

        return back()->with('info', 'El producto fue eliminado');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit',compact('product'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function update(ProductRequest $request, $id)
    {
        Product::findOrFail($id)->update($request->all());

        return redirect()->route('products.index')->with('info','Producto Actualizado');
    }

    public function store(ProductRequest $request)
    {
        Product::create($request->all());

        return redirect()->route('products.index')->with('info','Producto agregado');
    }
}
