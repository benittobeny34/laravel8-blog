<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'excerpt', 'body', 'slug', 'category_id'];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::kebab($value);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
