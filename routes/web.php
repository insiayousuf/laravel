<?php

use App\Http\Middleware\adminAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\http\Controllers\CategoryController;
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

Route::post('/kuchbhi', [ProductController::class, 'store']);

Route::get('/show', [ProductController::class, 'show']);


Route::get('/login', function(){
    return view('admin.login');
});
Route::post('admin/auth', [AdminController::class, 'verify']);

Route::group(['middleware' => 'adminAuth'], function(){
    
    Route::get('/dashboard', function(){
        return view('admin.dashboard');
    });

    Route::get('/signout',[AdminController::class , 'signout']);

    Route::get('/category', function(){
        return view('admin.category');
    });
    Route::get('/categories', function(){
        return view('admin.addCategory');
    });
    Route::post('addCategoryPost', [CategoryController::class, 'addCategoryPost']);
    Route::get('showCategory',[CategoryController::class,'showCategoryFunc']);
    Route::get('DeleteCategory/{id}',[CategoryController::class,'Delete']);
    
    Route::get('/products',[ProductController::class,'showproduct']);
    Route::post('productPost', [ProductController::class, 'productPost']);
});