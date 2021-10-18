<?php

namespace App\Models\Posts;

use App\Models\Category\Category;
use App\Models\Images\Image;
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

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function postsLang(){
        return $this->hasMany(PostLang::class,'post_id');
    }
}
