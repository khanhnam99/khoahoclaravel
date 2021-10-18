<?php

namespace App\Models\Category;

use App\Models\Posts\Post;
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
        'parent_id',
        'created_at',
        'updated_at',
    ];

    public function posts(){
        return $this->hasMany(Post::class,'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * URL https://laraveldaily.com/eloquent-recursive-hasmany-relationship-with-unlimited-subcategories/
     */
    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function childrenCategories()
    {
        return $this->hasMany(Category::class)->with('categories');
    }

}
