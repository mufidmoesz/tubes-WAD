<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index() {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create() {
        return view('admin.category.create');
    }

    public function store(Request $request) {
        $request->validate([
            'category_name' => 'required|unique:categories'
        ]);

        Category::create([
            'category_name' => $request->category_name
        ]);

        return redirect()->route('admin.category.index')->with('success', 'Category berhasil ditambahkan!');
    }

    public function edit($id) {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'category_name' => 'required|unique:categories,category_name,' . $id . ',category_id'
        ]);

        $category = Category::find($id);
        $category->update([
            'category_name' => $request->category_name
        ]);

        return redirect()->route('admin.category.index')->with('success', 'Category berhasil diupdate!');
    }

    public function destroy($id) {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('admin.category.index')->with('success', 'Category berhasil dihapus!');
    }
}
