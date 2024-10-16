<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRental extends Model
{
    use HasFactory;

    public $fillable = [
        'sku',
        'title',
        'slug',
        'img',
        'description',
        'short_description',
        'base_price',
        'sales',
        'galery',
        'zalog',
        'viev_count',
        'seo_title',
        'seo_description',
    ];

    protected $casts = [
        'sales' => 'array',
        'galery' => 'array'
    ];
}
