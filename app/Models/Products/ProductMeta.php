<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMeta extends Model
{
    use HasFactory;
    const TABLE = 'product_meta';
    protected $table = self::TABLE;
    protected $fillable =[
        'productId',
        'key',
        'contain'
    ];
}
