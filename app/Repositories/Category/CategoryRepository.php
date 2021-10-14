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
        ], $params);

        $result = Category::select(
            Category::TABLE . '.*',
            CategoryLang::TABLE . '.*'
        );
        $result->leftJoin(CategoryLang::TABLE, CategoryLang::TABLE.'.category_id', '=', Category::TABLE.'.id');

//        if ( !empty($params['status']) && is_array($params['status']) ) {
//            $params['status'] = implode(',', $params['status']);
//            $result->whereRaw("FIND_IN_SET(" . User::TABLE . ".status,'" . $params['status'] . "')");
//        }

        $result->orderBy(Category::TABLE . '.id', 'desc');

        return empty($limit) ? $result->get() : $result->paginate(config('pagination.per_page'));
    }
}
