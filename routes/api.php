<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Users\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
//    Route::post('login', [\App\Http\Controllers\Auth\AuthController::class,'login']);
//    Route::post('logout', [\App\Http\Controllers\Auth\AuthController::class,'logout']);
//    Route::post('refresh',  [\App\Http\Controllers\Auth\AuthController::class,'refresh']);
//    Route::post('me', [\App\Http\Controllers\Auth\AuthController::class,'me']);
//});


Route::prefix('v1')->group(function () {
    Route::post('login', [\App\Http\Controllers\Auth\AuthController::class,'login']);
    Route::middleware('jwt.verify')->group(function () {

        //users
        Route::prefix('users')->group(function () {
            Route::get('/', [UserController::class,'index'])->name('api.users.index');
            Route::post('me', [\App\Http\Controllers\Auth\AuthController::class,'me'])->name('api.users.me');
            Route::post('logout', [\App\Http\Controllers\Auth\AuthController::class,'logout'])->name('api.users.logout');
            Route::post('refresh',  [\App\Http\Controllers\Auth\AuthController::class,'refresh'])->name('api.users.refresh');
        });

        //Category
    });


});
