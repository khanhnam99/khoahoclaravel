<?php
namespace App\Repositories\Admin;

use App\Models\Admin\Admin;
use Prettus\Repository\Eloquent\BaseRepository;

class AdminRepository extends BaseRepository
{

    public function model()
    {
        return Admin::class;
    }

    public function getAll( $params = [], $limit = 20 )
    {
        $params = array_merge([
            'status' => [],
        ], $params);

        $result = Admin::select(
            Admin::TABLE . '.*'
        );

        $result->orderBy(Admin::TABLE . '.id', 'desc');

        return empty($limit) ? $result->get() : $result->paginate(config('pagination.per_page'));
    }
}
