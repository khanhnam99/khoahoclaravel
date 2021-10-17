<?php

namespace App\Repositories\Posts;

use App\Models\Category\Category;
use App\Models\Category\CategoryLang;
use App\Models\Posts\Post;
use Prettus\Repository\Eloquent\BaseRepository;

class PostRepository extends BaseRepository
{

    public function model()
    {
        return Post::class;
    }

    public function getAll( $params = [], $limit = 20 )
    {
        $params = array_merge([
            'status' => [],
        ], $params);

        $result = Post::select(
            Post::TABLE . '.*',
            CategoryLang::TABLE . '.name as category_name',
            CategoryLang::TABLE . '.description as category_description'
        );
        //$result->leftJoin(Category::TABLE, Category::TABLE.'.id', '=', Post::TABLE.'.category_id');
        $result->leftJoin(CategoryLang::TABLE, function ( $join ) use ( $params ) {
            $lang = 'vi';
            if ( $params['lang'] == 'en' ) {
                $lang = $params['lang'];
            }
            $join->on(CategoryLang::TABLE . '.category_id', '=', Post::TABLE . '.category_id')->where(CategoryLang::TABLE . '.lang', $lang);
        });

        if ( !empty($params['status']) && is_array($params['status']) ) {
            $params['status'] = implode(',', $params['status']);
            $result->whereRaw("FIND_IN_SET(" . Post::TABLE . ".status,'" . $params['status'] . "')");
        }

        $result->orderBy(Post::TABLE . '.id', 'desc');

        return empty($limit) ? $result->get() : $result->paginate(config('pagination.per_page'));
    }
}
