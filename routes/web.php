<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderManagermentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductManagementController;
use App\Http\Controllers\UserController;
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

Route::middleware('guest')->prefix('auth')->name('auth.')->group(function () {
    Route::get('login', [AuthController::class, 'getLogin'])->name('getLogin');
    Route::post('login', [AuthController::class, 'postLogin'])->name('postLogin');
    Route::get('login-google', [AuthController::class, 'getGoogleLogin'])->name('getGoogleLogin');
    Route::get('google/callback', [AuthController::class, 'googleLoginCallback'])->name('googleLoginCallback');
});
Route::middleware('auth')->prefix('auth')->name('auth.')->group(function () {
    Route::get('create-password', [AuthController::class, 'createPasswordForm'])->name('createPasswordForm');
    Route::post('save-password', [AuthController::class, 'savePassword'])->name('savePassword');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['auth', 'checkRoleUser'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('', [ProductManagementController::class, 'index'])->name('home');
    
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('', [UserController::class, 'index'])->name('list');
        Route::get('add', [UserController::class, 'create'])->name('create');
        Route::post('add', [UserController::class, 'store'])->name('store');
        Route::get('edit/{user}', [UserController::class, 'edit'])->name('edit');
        Route::put('edit/{user}', [UserController::class, 'update'])->name('update');
        Route::delete('delete/{user}', [UserController::class, 'destroy'])->name('delete');
        Route::put('changeStatus/{user}', [UserController::class, 'changeStatus'])->name('changeStatus');
    });
    
    Route::prefix('category')->name('category.')->group(function () {
        Route::get('', [CategoryController::class, 'index'])->name('list');
        Route::get('add', [CategoryController::class, 'create'])->name('create');
        Route::post('add', [CategoryController::class, 'store'])->name('store');
        Route::get('edit/{category}', [CategoryController::class, 'edit'])->name('edit');
        Route::put('edit/{category}', [CategoryController::class, 'update'])->name('update');
        Route::delete('delete/{category}', [CategoryController::class, 'destroy'])->name('delete');
    });

    Route::prefix('product')->name('product.')->group(function () {
        Route::get('', [ProductManagementController::class, 'index'])->name('list');
        Route::get('add', [ProductManagementController::class, 'create'])->name('create');
        Route::post('add', [ProductManagementController::class, 'store'])->name('store');
        Route::get('edit/{product}', [ProductManagementController::class, 'edit'])->name('edit');
        Route::put('edit/{product}', [ProductManagementController::class, 'update'])->name('update');
        Route::delete('delete/{product}', [ProductManagementController::class, 'destroy'])->name('delete');
        Route::put('changeStatus/{product}', [ProductManagementController::class, 'changeStatus'])->name('changeStatus');
        Route::get('search', [ProductManagementController::class, 'search'])->name('search');
    });

    Route::prefix('order')->name('order.')->group(function () {
        Route::get('', [OrderManagermentController::class, 'index'])->name('list');
        Route::get('edit/{order}', [OrderManagermentController::class, 'edit'])->name('edit');
        Route::put('edit/{order}', [OrderManagermentController::class, 'update'])->name('update');
    });
});


Route::prefix('')->name('client.')->group(function () {
    Route::get('', [HomeController::class, 'index'])->name('home');
    Route::get('contact', [ContactController::class, 'index'])->name('contact');
    Route::prefix('product')->name('product.')->group(function () {
        Route::get('', [ProductController::class, 'index'])->name('index');
        Route::get('{product}', [ProductController::class, 'detail'])->name('detail');
    });
});
Route::middleware('auth')->prefix('')->name('client.')->group(function () {
    Route::get('cart', [OrderController::class, 'index'])->name('cart');
    Route::post('cart', [OrderController::class, 'index'])->name('addToCart');
    Route::get('checkout', [OrderController::class, 'checkout'])->name('checkout');
});
