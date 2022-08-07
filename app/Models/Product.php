<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'old_price',
        'feature_image',
        'content',
        'user_id',
        'category_id',
        'status'
    ];

    public function images()
    {
        return $this->hasMany(Product_image::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
