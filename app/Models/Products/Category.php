<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    const TABLE = 'categories';
    protected $table = self::TABLE;
    protected $fillable = [
        'parent_id',
        'title',
        'meta_title',
        'slug',
        'content'
    ];
    protected $timestamps = true;

    /**
     * The categories that belong to the product.
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_category', 'category_id', 'product_id');
    }
}
