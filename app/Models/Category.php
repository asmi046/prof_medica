<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $fillable = [
        "title",
        "title_mini",
        "title_comment",
        "slug",
        "parent",
        "description",
        "img",
        "seo_title",
        "seo_description",
    ];

    public function setSlugAttribute($value)
    {
        if (empty($value))
            $this->attributes['slug'] =  Str::slug($this->title);
        else
            $this->attributes['slug'] =  $value;
    }

    public function category_tovars() {
        return $this->belongsToMany(Product::class);
    }
}
