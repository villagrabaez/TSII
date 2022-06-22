<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    public function store(ProductStoreRequest $request)
    {
        Product::create([
            'name' => $request['name'],
            'barcode' => $request['barcode'],
            'cost' => $request['cost'],
            'price' => $request['price'],
            'stock' => $request['stock'],
            'alert' => $request['alert'],
            'category_id' => $request['category_id'],
        ]);

        return redirect()->route('productos.index')->with('message', 'El producto se creo correctamente...');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();

        return view('products.edit', compact('product', 'categories'));
    }

    public function update(ProductUpdateRequest $request, $id)
    {
        $product = Product::FindOrFail($id);

        $product->fill($request->all())->save();

        return redirect()->route('productos.index')->with('message', 'El producto se actualizo correctamente...');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('productos.index')->with('message', 'El producto se elimino correctamente...');
    }
}
