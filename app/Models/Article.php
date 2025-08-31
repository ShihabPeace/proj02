<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{

    protected $fillable = ['article_Name', 'article_Content', 'category_id','slug'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function  getRoutekey()
    {
        return 'slug';
    }
}
