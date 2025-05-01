<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Page extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'keywords',
        'meta_image',
        'is_active'
    ];

    public function sections(): BelongsToMany
    {
        return $this->belongsToMany(PageSection::class)
            ->withPivot('order')
            ->orderBy('order');
    }
    
}
