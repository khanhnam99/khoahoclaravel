<?php

namespace App\Http\Controllers\Api\V1\Users;

use App\Enums\IssetType;
use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Resources\Users\UserResource;
use App\Models\Users\User;
use App\Repositories\Users\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private $userRepos;
    public function __construct(UserRepository $userRepos){
        $this->userRepos = $userRepos;
    }

    public function index(Request $request)
    {
        echo 1433333;
        exit;
        //$user = Auth::guard('api')->user();

        $user = User::find(1);
//        $params = $request->all();
//        $limit = $request->limit ?? config('pagination.per_page');
//        $users = $this->userRepos->getAll($params,$limit);
//        $result = $users->toArray();

        $data = new UserResource($user);
        return ResponseHelper::success('Success',$data);
        exit;


        $data = [
            'users'=> count($users) > IssetType::Zero ? $result['data'] : [],
            'products'=>[],
        ];
        return ResponseHelper::success('Success',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
