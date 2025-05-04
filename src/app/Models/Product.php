<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'user_id',
        'category_id',
        'image',
        'condition',
        'name',
        'brand',
        'description',
        'price', 
    ];

    public function categories()
{
    return $this->belongsToMany(Category::class, 'category_product', 'product_id', 'category_id');
}

    public $timestamps = true;
}
