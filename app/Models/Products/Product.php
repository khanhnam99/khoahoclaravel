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
        'user_id',
        'title',
        'meta_title',
        'slug',
        'summary',
        'type',
        'sku',
        'price',
        'discount',
        'quantity',
        'shop',
        'published_at',
        'starts_at',
        'ends_at',
        'content',
    ];

    /**
     * The products that belong to the category.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category', 'category_id', 'product_id');
    }

    /**
     * The product that belong to the tags.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tag', 'product_id', 'tag_id');
    }
}
