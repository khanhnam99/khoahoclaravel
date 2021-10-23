<?php

namespace App\Http\Controllers\Frontend\Products;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $data = [];
    public function __construct()
    {
    }

    public function index()
    {
        $this->data['products'] = Cart::content();
        return view('components.frontend.cart.index',$this->data);
    }
}
