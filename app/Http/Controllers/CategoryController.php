<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(CategoryStoreRequest $request)
    {
        Category::create([
            'name' => $request['name'],
        ]);

        return redirect()->route('categorias.index')->with('message', 'La categoria se creo correctamente...');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('categories.edit', compact('category'));
    }

    public function update(CategoryUpdateRequest $request, $id)
    {
        $category = Category::FindOrFail($id);

        $category->fill($request->all())->save();

        return redirect()->route('categorias.index')->with('message', 'La categoria se actualizo correctamente...');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect()->route('categorias.index')->with('message', 'La categoria se elimino correctamente...');
    }
}
