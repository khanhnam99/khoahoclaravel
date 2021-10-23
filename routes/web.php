<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 1;
});

// For User
Route::any('test', [\App\Http\Controllers\Frontend\User\UserController::class, 'index'])->name('frontend.user.index');
Route::any('login', [\App\Http\Controllers\Auth\FrontendLoginController::class, 'login'])->name('frontend.auth.login');
Route::any('acp/login', [\App\Http\Controllers\Auth\BackendLoginController::class, 'login'])->name('backend.admin.login');

// products
Route::get('/products', [\App\Http\Controllers\Frontend\Products\ProductController::class, 'index'])->name('frontend.product.index');
Route::post('/products/create', [\App\Http\Controllers\Frontend\Products\ProductController::class, 'create'])->name('frontend.product.create');
Route::post('/products/delete', [\App\Http\Controllers\Frontend\Products\ProductController::class, 'delete'])->name('frontend.product.delete');

//Cart
Route::get('/cart', [\App\Http\Controllers\Frontend\Products\CartController::class, 'index'])->name('frontend.cart.index');




Route::group(['middleware' => 'frontend'], function () {

    // Payment
    Route::get('/payment', [\App\Http\Controllers\Frontend\Payment\PaymentController::class, 'index'])->name('frontend.payment.index');

});
