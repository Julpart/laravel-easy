<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
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

Route::get('/', [HomeController::class,'index'])->name('index');

Route::name('admin.')
    ->prefix('admin')
    ->group(function (){
        Route::get('/', [IndexController::class,'index'])->name('index');
        Route::get('/users', [IndexController::class,'users'])->name('users');
        Route::get('/roles', [IndexController::class,'roles'])->name('roles');
    });
Route::prefix('categories')
    ->group(function (){
        Route::get('/',[CategoriesController::class,'index'])->name('categories');
    });
Route::prefix('news')
    ->name('news.')
    ->group(function (){
        Route::get('/', [NewsController::class,'index'])->name('index');
        Route::get('/{id}', [NewsController::class,'show'])->name('newsOne')->where('id', '[0-9]+');
        Route::get('/category/{id}', [NewsController::class,'showCategory'])->name('newsCategory');
        Route::get('/add', [NewsController::class,'add'])->name('newsAdd');
    });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');


