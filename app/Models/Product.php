<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

        "price",
        "old_price",

        'galery',

        "viev_count",

        "hit",
        "new",

        "seo_title",
        "seo_description",
    ];

    protected $casts = [
        'galery' => 'array'
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

    // public function product(): BelongsTo
    // {
    //     if ($this->product_type === "Продажа")
    //         return $this->belongsTo(Product::class,'id', 'product_id');
    //     else
    //         return $this->belongsTo(ProductRental::class,'id', 'product_id');
    // }

    public function galery(): HasMany
    {
        return $this->hasMany(ProductGalery::class)->where('product_type', "Продажа");
    }
}
