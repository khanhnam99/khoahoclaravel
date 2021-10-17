<?php

namespace App\Http\Controllers\Backend\Posts;

use App\Helpers\PaginationHelper;
use App\Http\Controllers\BackendController;
use App\Http\Requests\Backend\Posts\PostRequest;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Modules\ModuleRepository;
use App\Repositories\Posts\PostRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PostController extends BackendController
{
    //
    protected $postRepos, $moduleRepos, $categoryRepos;
    protected $data = [];

    public function __construct( PostRepository $postRepos, ModuleRepository $moduleRepos, CategoryRepository $categoryRepos )
    {
        $this->postRepos = $postRepos;
        $this->moduleRepos = $moduleRepos;
        $this->categoryRepos = $categoryRepos;
    }

    public function index( Request $request )
    {

        $category = $this->postRepos->getAll([]);
        $params = $request->only(['keyword', 'status']);
        $total = !empty($category->total()) ? $category->total() : 0;
        $perPage = !empty($category->perPage()) ? $category->perPage() : 1;
        $this->data['items'] = $category;
        $page = !empty($request->page) ? $request->page : 1;
        $url = route('backend.category.index') . '?' . Arr::query($params);
        $this->data['offset'] = ( ( $page - 1 ) * $perPage ) + 1;
        $this->data['pager'] = PaginationHelper::BackendPagination($total, $perPage, $page, $url);
        return view('components.backend.posts.index', $this->data);
    }

    public function create()
    {

        $this->data['modules'] = $this->moduleRepos->getAll([]);
        $this->data['category'] = $this->categoryRepos->getAll([]);
        return view('components.backend.posts.create', $this->data);
    }

    public function store( PostRequest $request )
    {

        // Retrieve a portion of the validated input data...
        $validated = $request->safe()->only(['name', 'email']);
        $validated = $request->safe()->except(['name', 'email']);

        return 1;
    }

    public function show( Request $request )
    {
        //
    }

    public function edit( Request $request )
    {
        //
    }

    public function update( Request $request )
    {
        //
    }

    public function destroy( Request $request )
    {
        //
    }
}
