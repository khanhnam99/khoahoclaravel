<?php

namespace App\Http\Controllers\Backend\Posts;

use App\Helpers\PaginationHelper;
use App\Http\Controllers\BackendController;
use App\Repositories\Posts\PostRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PostController extends BackendController
{
    //
    protected $postRepos;
    protected $data = [];
    public function __construct(PostRepository $postRepos)
    {
        $this->postRepos = $postRepos;
    }

    public function index(Request $request)
    {
        $category = $this->postRepos->getAll([]);
        $params = $request->only(['keyword', 'status']);
        $total = !empty($category->total()) ? $category->total() : 0;
        $perPage = !empty($category->perPage()) ? $category->perPage() : 1;
        $this->data['items'] = $category;
        $page = !empty($request->page) ? $request->page :  1;
        $url = route('backend.category.index').'?'.Arr::query($params);
        $this->data['offset'] =  (($page - 1) * $perPage) + 1;
        $this->data['pager'] = PaginationHelper::BackendPagination($total,$perPage,$page,$url);
        return view('components.backend.posts.index',$this->data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show( Request $request)
    {
        //
    }

    public function edit( Request $request)
    {
        //
    }

    public function update(Request $request)
    {
        //
    }

    public function destroy(Request $request )
    {
        //
    }
}
