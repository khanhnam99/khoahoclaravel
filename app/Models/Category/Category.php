<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;

    const TABLE = 'category';
    protected $table = self::TABLE;
    protected $fillable = [
        'status',
        'created_at',
        'updated_at',
    ];
}
