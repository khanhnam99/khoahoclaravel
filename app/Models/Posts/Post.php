<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory,SoftDeletes;

    const TABLE = 'posts';
    protected $table = self::TABLE;
    protected $fillable = [
        'status',
        'option',
        'module_id',
        'category_id',
        'created_at',
        'updated_at',
    ];
}
