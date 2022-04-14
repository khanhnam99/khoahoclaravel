<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    use HasFactory;
    const TABLE='product_review';
    protected $table = self::TABLE;
    protected $fillable = [
        'productId',
        'parentId',
        'title',
        'rating',
        'published',
        'publishedAt',
        'content'
    ];
}
