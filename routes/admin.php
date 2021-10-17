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

        //Category
        Route::get('/category', [\App\Http\Controllers\Backend\Category\CategoryController::class, 'index'])->name('backend.category.index');

    });
});




