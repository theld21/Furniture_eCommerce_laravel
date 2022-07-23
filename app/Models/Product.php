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
        'feature_image',
        'content',
        'user_id',
        'category_id',
    ];

    public function images()
    {
        return $this->hasMany(Product_image::class);
    }
}
