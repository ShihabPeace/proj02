<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;

class SubCategoryMaker extends Controller
{
     public function show()
    {
        $categories = Category::all();
        return view('dashboard.category-create', compact('categories'));
    }

    public function store(Request $r){
        $r->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string|max:1000',
        ]);

        // SubCategory::create([
        //     'name' => $r->name,
        //     'category_id' => $r->category_id, // map the form field
        //     'description' => $r->description,
        // ]);
        
        SubCategory::create($r->all());
        return Redirect()->back();

        // $category = Category::where('name', $r->parent_category)->first();
        // $Sub_Category = $category->subcategories()->create();

        // dd();
        // $Sub_Category->subcategory_name = $r->name;
        // $Sub_Category->parent_category = $r->parent_category;
        // $Sub_Category->description = $r->description;
        // $Sub_Category->save();

        

    }
}
