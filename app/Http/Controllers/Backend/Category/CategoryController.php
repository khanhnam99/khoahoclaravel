<?php

namespace App\Http\Controllers\Backend\Category;

use App\Helpers\PaginationHelper;
use App\Http\Controllers\BackendController;
use App\Repositories\Category\CategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CategoryController extends BackendController
{
    //
    protected $categoryRepos;
    protected $data = [];
    public function __construct(CategoryRepository $categoryRepos)
    {
        $this->categoryRepos = $categoryRepos;
    }

    public function index(Request $request)
    {
        $category = $this->categoryRepos->getAll([]);
        $params = $request->only(['keyword', 'status']);
        $total = !empty($category->total()) ? $category->total() : 0;
        $perPage = !empty($category->perPage()) ? $category->perPage() : 1;
        $this->data['items'] = $category;
        $page = !empty($request->page) ? $request->page :  1;
        $url = route('backend.category.index').'?'.Arr::query($params);
        $this->data['offset'] =  (($page - 1) * $perPage) + 1;
        $this->data['pager'] = PaginationHelper::BackendPagination($total,$perPage,$page,$url);
        return view('components.backend.category.index',$this->data);
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
