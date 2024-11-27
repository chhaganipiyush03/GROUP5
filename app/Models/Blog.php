<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'content',
        'publish_date',
        'user_id'
    ];

    protected $dates = ['publish_date'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Scope to filter blogs with past publish dates
    public function scopePublished($query)
    {
        return $query->where('publish_date', '<=', now());
    }
}
