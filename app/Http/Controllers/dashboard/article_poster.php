<?php

namespace App\Http\Controllers\dsahboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class article_poster extends Controller
{
   public function store(Request $r){
    $r->validate([
        'name' => 'required|string|max:2',
        'category_id' => 'required|exists:categories,id',
        'sub_category_id' => 'required|exists:sub_categories,id',
        'article_Content' => 'required|string',
        'role' => 'required|in:author,editor,admin',
    ]);

    Article::create($r->all());
    return Redirect()->back();

   }
}
