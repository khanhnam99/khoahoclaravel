<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    const TABLE ='tags';
    protected $table = self::TABLE;
    protected $fillable = [
        'slug',
        'content',
        'title',
        'meta_title'
    ];

    /**
     * The tags that belong to the product.
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_tag', 'product_id', 'tag_id');
    }
}
