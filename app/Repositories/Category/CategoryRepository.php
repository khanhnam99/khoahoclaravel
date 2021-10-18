<?php

namespace App\Repositories\Category;


use App\Models\Category\Category;
use App\Models\Category\CategoryLang;
use Prettus\Repository\Eloquent\BaseRepository;

class CategoryRepository extends BaseRepository
{

    public function model()
    {
        return Category::class;
    }

    public function getAll( $params = [], $limit = 20 )
    {
        $params = array_merge([
            'status' => [],
            'lang' => 'vi',
            'keyword' => null,
        ], $params);

        $result = Category::select(
            Category::TABLE . '.*',
            CategoryLang::TABLE . '.*'
        );

        $result->leftJoin(CategoryLang::TABLE, function ( $join ) use ( $params ) {
            $lang = 'vi';
            $join->on(CategoryLang::TABLE . '.category_id', '=', Category::TABLE . '.id')->where(CategoryLang::TABLE . '.lang', $lang);
        });

        if ( !empty($params['keyword']) ) {
            $result->where(CategoryLang::TABLE . '.name', 'LIKE', '%' . $params['keyword'] . '%');
        }

        $result->orderBy(Category::TABLE . '.id', 'desc');
        return empty($limit) ? $result->get() : $result->paginate(config('pagination.per_page'));
    }

    public function getParentCategory()
    {
       return Category::whereRaw('parent_id=0');
    }
}
