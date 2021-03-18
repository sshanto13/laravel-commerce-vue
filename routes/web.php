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
use App\Http\Controllers\CategoryController;
Route::get('/', function () {
    return view('cate');
});

//route for category
Route::get('login', [CategoryController::class, 'categoryList']);
//Route::get('/category-list', 'App\Http\Controllers\CategoryController@categoryList');

