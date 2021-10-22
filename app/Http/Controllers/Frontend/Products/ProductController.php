<?php

namespace App\Http\Controllers\Frontend\Products;

use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        $co = Cart::content();
        dd($co);

//        Cart::add('293ad', 'Product 1', 1, 9.99, 550);
//        $ss = Cart::content();
//        dd($ss);
//        echo 1;
//        exit;
        return 1;
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
        Cart::add('293ad', 'Product 1', 1, 9.99, 550);
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

    public function delete($id){
        $rowId = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
        Cart::remove($rowId);
    }
}
