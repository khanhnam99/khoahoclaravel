<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryLang extends Model
{
    use HasFactory;

    const TABLE = 'category_lang';
    protected $table = self::TABLE;
    protected $fillable = [
        'category_id',
        'lang',
        'name',
        'description',
        'created_at',
        'updated_at',
    ];
}
