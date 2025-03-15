<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();

        return view('home.category.index', compact('category'));
    }

    public function create()
    {
        return view('home.category.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
         ]);

        Category::create([
            'name' => $request->name,
        ]);

        return redirect('/category')->with('success', 'Data berhasil ditambah');
    }

    public function edit(string $id)
    {
        $category = Category::find($id);

        return view('home.category.edit', compact('category'));
    }

    public function update(Request $request, string $id)
    {
        $category = Category::find($id);

        $request->validate([
            'name' => 'required|min:3',
         ]);

        $category->update([
            'name' => $request->name,
        ]);

        return redirect('/category')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);

        $category->delete();
        return redirect('/category')->with('success', 'Data berhasil dihapus');
    }
}
