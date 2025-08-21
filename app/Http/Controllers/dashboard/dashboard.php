<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function Categories_index()
    {
        $category_list = Category::all();
        $subcategory_list = Category::with('subCategories')->get();
        // dd($subcategory_list[0]->subCategories);
        return view('dashboard.category-list')->with(compact('category_list', 'subcategory_list'));
    }
    // publicfunction  dash
}
