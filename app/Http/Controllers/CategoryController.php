<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.category-list', compact('categories'));
    }
    public function store(Request $r)
    {
        $r->validate([
            'name' => 'required|string|max:255|unique:categories,name',
            'parent_category' => 'nullable|exists:categories,parent_category',
            'description' => 'nullable|string|max:1000',
        ]);
        $category = new Category();
        $category->name = $r->name;
        $category->parent_category = $r->parent_category;
        $category->description = $r->description;
        $category->save();
        
    }
}
