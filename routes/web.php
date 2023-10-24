<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});
Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/admin/test', [AdminController::class,'index'])->name('admin');
Route::get('/admin/productslist', [ProductController::class,'list'])->name('listprod');
Route::get('/admin/showprod', [ProductController::class,'showprod'])->name('showprod');
Route::post('/admin/addprod', [ProductController::class,'addprod'])->name('addprod');
Route::get('/admin/showeditprod/{id}', [ProductController::class,'showeditprod'])->name('showeditprod');
Route::post('/admin/modifyprod', [ProductController::class,'modifyprod'])->name('modifyprod');
Route::post('/admin/modifyprodimgs', [ProductController::class,'modifyprodimgs'])->name('modifyprodimgs');
Route::get('/admin/imagesdelete/{id}', [ProductController::class,'imagesdelete'])->name('imagesdelete');




