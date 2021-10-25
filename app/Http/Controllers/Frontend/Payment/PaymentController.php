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
        return view('components.frontend.payment.index',$this->data);
    }

    public function orderPayment(Request $request){
        $this->data['products'] = Cart::content();
        // kiểm tra id của sản phẩm có trong datatabase hay không?
        // Nếu mà sản phẩm nào có thì insert

        // Insert vào bản order trước
        // Lấy id của order đó

        // Dùng foreach $this->data['products'];
        // kiểm tra sản phầm tồn tại trong database thì insert


        // sau khi insert xong thì mình xóa $this->data['products']

        if ( count($this->data['products']) > 0 ) {
            //1. insert Order


            foreach ( $this->data['products'] as $product ) {
                //2. insert orvào order_id
            }

            // sau khi insert xong thì xóa tất cả các cart

            // Xóa cart

//            foreach($this->data['products'] as $product){
//                // insert vào order_id
//                Cart::remove($product->rowId);
//            }

            //

            Cart::destroy();

        }

        return ResponseHelper::success('Thanh toán thành công',[]);
    }
}
