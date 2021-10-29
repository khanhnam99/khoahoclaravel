<?php
namespace App\Repositories\Users;

use App\Models\Users\User;
use Prettus\Repository\Eloquent\BaseRepository;

class UserRepository extends BaseRepository
{

    public function model()
    {
        return User::class;
    }

    public function getAll( $params = [], $limit = 20 )
    {
        $params = array_merge([
            'status' => [],
        ], $params);

        $result = User::select(
            User::TABLE . '.*'
        );

//        if ( !empty($params['status']) && is_array($params['status']) ) {
//            $params['status'] = implode(',', $params['status']);
//            $result->whereRaw("FIND_IN_SET(" . User::TABLE . ".status,'" . $params['status'] . "')");
//        }

        $result->orderBy(User::TABLE . '.id', 'desc');

        return empty($limit) ? $result->get() : $result->paginate($limit);
    }

    public function getById($id) {
        return User::find($id);
    }
}
