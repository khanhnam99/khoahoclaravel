<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Dashboard\DashboardController;

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

//Route::middleware('auth:backend')->group(function () {
//    //Route::get('/', [HomeController::class, 'index'])->name('dashboard');
//});



Route::prefix('acp')->group(function () {

    Route::group(['middleware' => 'backend'], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('backend.dashboard.index');

        // Demo
        Route::prefix('demo')->group(function () {
            Route::get('/', [\App\Http\Controllers\Backend\Demo\DemoController::class, 'index'])->name('backend.demo.index');
        });


        //Category
        Route::prefix('category')->group(function () {
            Route::get('/', [\App\Http\Controllers\Backend\Category\CategoryController::class, 'index'])->name('backend.category.index');
        });


        //Post
        Route::prefix('posts')->group(function () {
            Route::get('/', [\App\Http\Controllers\Backend\Posts\PostController::class, 'index'])->name('backend.posts.index');
            Route::get('/create', [\App\Http\Controllers\Backend\Posts\PostController::class, 'create'])->name('backend.posts.create');
            Route::post('/store', [\App\Http\Controllers\Backend\Posts\PostController::class, 'store'])->name('backend.posts.store');
            Route::post('/delete', [\App\Http\Controllers\Backend\Posts\PostController::class, 'destroy'])->name('backend.posts.delete');
        });


    });
});




