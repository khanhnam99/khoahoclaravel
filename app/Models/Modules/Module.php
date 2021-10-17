<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    const TABLE = 'modules';
    protected $table = self::TABLE;
    protected $fillable = [
        'status',
        'customize_name',
        'name' ,
        'created_at',
        'updated_at',
    ];
}
