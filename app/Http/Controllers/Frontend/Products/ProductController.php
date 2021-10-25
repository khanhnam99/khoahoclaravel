<?php

namespace App\Http\Controllers\Frontend\Products;

use App\Enums\UserType;
use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Repositories\Posts\PostRepository;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $data = [];
    protected $postRepos;
    public function __construct(PostRepository $postRepos)
    {
        $this->postRepos = $postRepos;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $this->postRepos->create([
//            'status' => UserType::Active,
//        ]);

        //Cart::add('2656', 'Product 3', 1, 9.99, 550);
       $this->data['products'] = Cart::content();

        return view('components.frontend.products.index',$this->data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        // kiểm tra mã đơn hàng có tồn tại hay không?
        // kiểm tra số lượng tồn nếu có

        $product = $this->postRepos->find($request->id);
        $quantity = $request->quantity ?? 1;
        $rowId = $request->id;
        $cartInfo = Cart::get($rowId);
        if($cartInfo){
            Cart::update($rowId, $quantity); // Will update the quantity
        }
        //Cart::add('293a1', 'Product 1', 1, 9.99, 550);
        $data = [
            'cartInfo'=>$cartInfo
        ];
        return ResponseHelper::success('thành công',$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rowId = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
        Cart::get($rowId);
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
        $rowId = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
        Cart::update($rowId, 2);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::destroy();
    }

    public function delete(Request $request){

        $rowId = $request->id;
        $cartInfo = Cart::get($rowId);
        if(!$cartInfo) {
            return ResponseHelper::error('Sản phẩm này không tồn tại',[]);
        }

        Cart::remove($rowId);
        return ResponseHelper::success('thành công',[]);
    }
}
