<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::prefix('user')->name('user.')->group(function () {
//         Route::get('/', [UserController::class, 'index'])->name('list');
//         Route::get('add', [UserController::class, 'create'])->name('create');
//         Route::post('add', [UserController::class, 'store'])->name('store');
//         Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
//         Route::put('edit/{id}', [UserController::class, 'update'])->name('update');
//         Route::delete('delete/{user}', [UserController::class, 'destroy'])->name('delete');
//     });
// });



Route::prefix('')->name('client.')->group(function () {
    Route::get('', [HomeController::class, 'index'])->name('home');

    Route::prefix('product')->name('product.')->group(function () {
        Route::get('', [ProductController::class, 'index'])->name('index');
        Route::get('{product}', [ProductController::class, 'detail'])->name('detail');
    });

    Route::get('cart', [OrderController::class, 'index'])->name('cart');
    Route::get('checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::get('contact', [ContactController::class, 'index'])->name('contact');

    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::get('signup', [LoginController::class, 'signup'])->name('signup');
});
