<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    const TABLE = 'category';
    protected $table = self::TABLE;
    protected $fillable = [
        'parentId',
        'title',
        'metaTitle',
        'slug',
        'content'
    ];
    protected $timestamps = false;
}
