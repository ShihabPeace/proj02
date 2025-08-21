<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(User::class,'article_Author', 'id');
    // }
    protected $fillable = [
        'name',
        'category_id',
        'sub_category_id',
        'article_Content',
        'role',
    ];

    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class,'sub_category_id' ,'id');
    }
}
