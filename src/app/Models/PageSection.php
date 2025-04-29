<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
    protected $fillable = [
        'page_id',
        'type',
        'title',
        'content',
        'sort_order'
    ];

    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }
}
