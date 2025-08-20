<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sub_Category extends Model
{
    public function Category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_category', 'name');
        
    }
}
