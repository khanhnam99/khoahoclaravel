<?php

namespace App\Http\Controllers\Frontend\Payment;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $data = [];
    public function __construct()
    {

    }

    public function index()
    {
        echo 'Payment';
        exit;
//        $this->data['products'] = Cart::content();
//        return view('components.frontend.cart.index',$this->data);
    }
}
