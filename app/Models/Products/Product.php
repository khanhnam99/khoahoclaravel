<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    const TABLE ='products';
    protected $table = self::TABLE;
    protected $fillable = [
        'userId',
        'title',
        'metaTitle',
        'slug',
        'summary',
        'type',
        'sku',
        'price',
        'discount',
        'quantity',
        'shop',
        'createdAt',
        'updatedAt',
        'publishedAt',
        'startsAt',
        'endsAt',
        'content',
    ];
}
