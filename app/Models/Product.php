<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = [
        "sku",
        "title",
        "slug",
        "img",
        "description",
        "short_description",

        "viev_count",

        "hit",
        "new",

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


    public function tovar_categories() {
        return $this->belongsToMany(Category::class);
    }
}
