<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'brand_id',
        'title',
        'slug',
        'meta_description',
        'meta_keywords',
        'description',
        'how_to_buy',
        'cover',
        'price',
        'recommended',
        'special',
        'top_category',
        'created_at',
        'updated_at'
    ];
}
