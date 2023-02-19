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
        Route::get('/getImage', [IndexController::class,'getImage'])->name('getImage');
        Route::match(['get','post'],'/getNews', [IndexController::class,'getNews'])->name('getNews');
        Route::match(['get','post'],'/create', [IndexController::class,'create'])->name('create');
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
    });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/save', [App\Http\Controllers\HomeController::class, 'save'])->name('save');

