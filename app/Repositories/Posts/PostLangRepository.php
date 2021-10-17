<?php

namespace App\Repositories\Posts;

use App\Models\Posts\PostLang;
use Prettus\Repository\Eloquent\BaseRepository;

class PostLangRepository extends BaseRepository
{

    public function model()
    {
        return PostLang::class;
    }

    /**
     * insert multiple post
     * @param array $data
     * @param null $post_id
     */
    public function insert($data = [],$post_id = null) {
        if(!empty($data)) {
            foreach($data as $key => $item) {
                $item['lang'] = $key;
                $item['post_id'] = $post_id;
                $item['created_at'] = date('Y-m-d H:i:s');
                $item['updated_at'] = date('Y-m-d H:i:s');
                PostLang::create($item);
            }
        }

    }

}
