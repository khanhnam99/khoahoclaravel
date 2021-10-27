<?php

namespace App\Http\Controllers\Api\V1\Users;

use App\Enums\IssetType;
use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Repositories\Users\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userRepos;
    public function __construct(UserRepository $userRepos){
        $this->userRepos = $userRepos;
    }

    public function index(Request $request)
    {
        $params = $request->all();
        $limit = $request->limit ?? config('pagination.per_page');
        $users = $this->userRepos->getAll($params,$limit);
        $result = $users->toArray();
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
