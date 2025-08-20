<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Sub_Category;
use Illuminate\Http\Request;

class Sub_Category_maker extends Controller
{
    public function store(Request $r){
        $r->validate([
            'name' => 'required|string|max:255',
            'parent_category' => 'required|exists:categories,name',
            'description' => 'nullable|string|max:1000',
        ]);
        
        $Sub_Category = new Sub_Category();

        $Sub_Category->name = $r->name;
        $Sub_Category->parent_category = $r->parent_category;
        $Sub_Category->description = $r->description;
        $Sub_Category->save();



    }
}
