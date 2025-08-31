<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use LaraDumps\LaraDumps\Livewire\Attributes\Ds;

class ArticleMaker extends Controller
{
    public function show()
    {
        $categories = Category::all();
        // dd($categories, $sub_categories);
        return view('dashboard.article-create')->with(compact('categories'));
    }
    public function store(Request $request)
    {
        // ds($request->all());

        $request->validate([
            'article_Name' => 'required|string|max:255|unique:articles,article_Name|unique:categories,name',
            'category_id' => 'required|exists:categories,id',
            'article_Content' => 'required|string|unique:articles,article_Content',
        ]);
        $slug = Str::slug($request->input('article_Name'));
        
            Article::create(array_merge($request->all(), ['slug' => $slug]));
            return Redirect()->back()->with('success', 'Article created successfully!');
         
            
    
        return Redirect()->back()->with('success', 'Article created successfully!');
    }
    //web route:    Route::get('/single-blog/{slug}', [ArticleMaker::class, 'show_article'])->name('single-blog');

    public function show_article(Article $article)
     {
        ds($article->article_Name);
           return view('single-blog')->with(compact('article'));

    }
}
