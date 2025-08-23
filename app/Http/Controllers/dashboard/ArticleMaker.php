<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\SubCategory;

class ArticleMaker extends Controller
{
    public function show()
    {
        $categories = Category::all();
        $sub_categories = SubCategory::all();
        // dd($categories, $sub_categories);
        return view('dashboard.article-create')->with(compact('categories', 'sub_categories'));
    }
    public function store(Request $r)
    {
        $r->validate([
            'article_Name' => 'required|string|max:255|unique:articles,article_Name|unique:categories,name|unique:sub_categories,name',
            'category_id' => 'required|exists:categories,id',
            'sub_category_id' => 'required|exists:sub_categories,id',
            'article_Content' => 'required|string|unique:articles,article_Content',
        ]);

        try {
            Article::create($r->all());
            return Redirect()->back()->with('success', 'Article created successfully!');
        } catch (\Exception $e) {
            return Redirect()->back()->with('error', 'Failed to create article: ' . $e->getMessage());
        }
        return Redirect()->back()->with('success', 'Article created successfully!');
    }
}
