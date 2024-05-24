<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Fungsi untuk relasi ke models User   
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    // Fungsi untuk relasi ke models Category   
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
