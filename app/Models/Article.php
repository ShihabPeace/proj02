<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use Sluggable;

    protected $fillable = ['article_Name', 'article_Content', 'category_id', 'sub_category_id'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function subCategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }
    public function sluggable():array{
        return[
            'slug'=>[
                'source'=> 'title'
            ]
        ];
    }
}
