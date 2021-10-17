<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostLang extends Model
{
    use HasFactory;

    const TABLE = 'posts_lang';
    protected $table = self::TABLE;
    protected $fillable = [
        'post_id',
        'lang',
        'name',
        'description',
        'short_description',
        'created_at',
        'updated_at',
    ];
}
