<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    Category::create([
        'name' => $request->input('name'),
    ]);

    return back()->with('success', 'Category added successfully.');
}
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    $category = Category::findOrFail($id);
    $category->name = $request->input('name');
    $category->save();

    return back()->with('success', 'Category updated successfully.');
}
public function softDelete($id)
{
    $category = Category::findOrFail($id);
    $category->delete(); // Cela va utiliser la suppression douce

    return back()->with('success', 'Category deleted successfully.');
}
}
