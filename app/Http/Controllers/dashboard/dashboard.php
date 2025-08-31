<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function index()
    {
        $category_list = Category::get();
        return view('dashboard.category-list')->with(compact('category_list'));
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
        $articles = Article::with('category')->get();
        $Featured_articles = Article::inRandomOrder()->limit(3)->get();
        $Recent_articles = Article::orderBy('created_at','desc')->limit(3)->get();
        // dd($Recent_articles);
        return view('home')->with(compact('articles', 'Featured_articles', 'Recent_articles'));
    }
}
