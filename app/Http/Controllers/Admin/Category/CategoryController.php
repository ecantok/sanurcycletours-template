<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        return view('adminpage.category.index');
    }

    public function add()
    {
        return view('adminpage.category.add');
    }

    public function store(Request $request)
    {
        $validData = $request->validate([
            'name' => 'required',
        ]);

        $category = new Category;
        $category->name = $validData['name'];
        $category->slug = Str::slug($validData['name']);
        $category->save();

        return redirect()->route('admin.category.index')->with('success', 'Category added successfully');
    }

    public function edit(Category $category)
    {
        return view('adminpage.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validData = $request->validate([
            'name' => 'required',
        ]);

        $category->name = $validData['name'];
        $category->slug = Str::slug($validData['name']);
        $category->save();

        return redirect()->route('admin.category.index')->with('success', 'Category updated successfully');
    }

    public function delete(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index')->with('success', 'Category deleted successfully');
    }
}
