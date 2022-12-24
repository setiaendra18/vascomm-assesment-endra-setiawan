<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::get('/', [App\Http\Controllers\CustomerController::class, 'index']);
Route::get('/product/detail/{id}', [App\Http\Controllers\CustomerController::class, 'view'])->name('product_detail');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::prefix('admin')->group(function () {
    Route::get('/customer', [App\Http\Controllers\AdminController::class, 'customer_index'])->name('customer_index');
    Route::get('/customer/delete/{id}', [App\Http\Controllers\AdminController::class, 'customer_destroy'])->name('customer_destroy');
    Route::get('/customer/view/{id}', [App\Http\Controllers\AdminController::class, 'customer_view'])->name('customer_view');
    Route::get('/customer/edit/{id}', [App\Http\Controllers\AdminController::class, 'customer_edit'])->name('customer_edit');
    Route::post('/customer/update', [App\Http\Controllers\AdminController::class, 'customer_update'])->name('customer_update');
   
    Route::get('/product/delete/{id}', [App\Http\Controllers\AdminController::class, 'product_destroy'])->name('product_destroy');
    Route::get('/product/create', [App\Http\Controllers\AdminController::class, 'product_create'])->name('product_create');
    Route::post('/product/store', [App\Http\Controllers\AdminController::class, 'product_store'])->name('product_store');
});
