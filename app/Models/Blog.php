<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'description', 'blog_date', 'image'];

    public function getImageUrlAttribute()
    {
        return asset('asset/blog' . $this->image);
    }
}