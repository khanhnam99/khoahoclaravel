<?php

namespace App\Http\Controllers\Backend\Posts;

use App\Helpers\PaginationHelper;
use App\Http\Controllers\BackendController;
use App\Http\Requests\Backend\Posts\PostRequest;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Modules\ModuleRepository;
use App\Repositories\Posts\PostLangRepository;
use App\Repositories\Posts\PostRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PostController extends BackendController
{
    //
    protected $postRepos, $moduleRepos, $categoryRepos,$postLangRepos;
    protected $data = [];

    public function __construct(
        PostRepository $postRepos,
        ModuleRepository $moduleRepos,
        CategoryRepository $categoryRepos,
        PostLangRepository  $postLangRepos
    )
    {
        $this->postRepos = $postRepos;
        $this->moduleRepos = $moduleRepos;
        $this->categoryRepos = $categoryRepos;
        $this->postLangRepos = $postLangRepos;
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

        $this->data['post'] = [];
        $this->data['modules'] = $this->moduleRepos->getAll([]);
        $this->data['category'] = $this->categoryRepos->getAll([]);
        return view('components.backend.posts.create', $this->data);
    }

    public function store( PostRequest $request )
    {
        //$name = $request->input('name');
        //if ($request->isMethod('post')) {
        //$value = $request->header('X-Header-Name');
        //if ($request->hasHeader('X-Header-Name'))
        //$token = $request->bearerToken();
        //$ipAddress = $request->ip();
        //$input = $request->all();
        //$input = $request->only('username', 'password');

//        if ($request->has('name')) {
//            //
//        }

//        if ($request->hasFile('photo')) {
//            //
//        }
        // Retrieve a portion of the validated input data...

        //$status = $request->input('status', 0);
        if ($request->isMethod('post')) {
            $locales  = $request->locales;
            $params = $request->only('module_id', 'category_id','status');
            $params['status'] = !empty($request->status) ? 1 : 0;
            $post = $this->postRepos->create($params);
            $this->postLangRepos->insert($locales,$post->id);
            return redirect()->route('backend.posts.index')->with('success', 'Success');
        }
        return redirect()->route('backend.posts.index');
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
