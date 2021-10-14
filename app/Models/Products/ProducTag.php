<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProducTag extends Model
{
    use HasFactory;
    const TABLE ='product_tags';
    protected $table = self::TABLE;
    protected $fillable = [
        'productId',
        'tagId'
    ];
}
