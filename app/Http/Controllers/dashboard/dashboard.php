<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function index()
    {
        $category_list = Category::with('subCategories')->get();
        $subcategory_list = Category::with('subCategories')->get();
        // dd($subcategory_list[0]->subCategories);
        return view('dashboard.category-list')->with(compact('category_list', 'subcategory_list'));
    }
    public function articleIndex()
    {
        $articles =  Article::get();
        // $a = $articles->;

        // dd($a);
        return view('dashboard.article-list')->with(compact('articles'));
    }
    public function home()
    {
        $articles = Article::with('category', 'subCategory')->get();
        $Featured_articles = Article::inRandomOrder()->limit(3)->get();
        $Recent_articles = Article::orderBy('created_at','desc')->limit(3)->get();
        // dd($Recent_articles);
        return view('home')->with(compact('articles', 'Featured_articles', 'Recent_articles'));
    }
}
