<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;



Route::get('/', [WelcomeController::class, 'index'])->middleware('auth')->name('index');
Route::get('/contact', [WelcomeController::class, 'contact'])->name('contact');
Route::get('/about', [WelcomeController::class, 'about'])->name('about');
Route::get('/news', [WelcomeController::class, 'news'])->name('news');
Route::get('/danhgia', [WelcomeController::class, 'danhgia'])->name('danhgia');
Route::get('/product', [WelcomeController::class, 'product'])->name('product');
Route::get('/product/{id}', [WelcomeController::class, 'detail'])->name('product.detail');
Route::get('/listProduct', [WelcomeController::class, 'showListProduct']);

Route::get('/search', [WelcomeController::class, 'index'])->name('search');

Route::get('/news', [WelcomeController::class, 'news'])->name('news');  
Route::get('/pay', [WelcomeController::class, 'pay'])->name('pay');
Route::get('/header', [WelcomeController::class, 'cate'])->name('header');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/apply-discount', [CartController::class, 'applyDiscount'])->name('discount.apply');


Route::get('/admin', 'ProductController@admin')->name('admin');
Route::post('/admin/sanpham/store', [ProductController::class, 'store'])->name('admin.sanpham.store');
Route::put('/admin/sanpham/update/{sanpham_id}', [ProductController::class, 'update'])->name('admin.sanpham.update');
Route::delete('/admin/sanpham/delete/{sanpham_id}', [ProductController::class, 'delete'])->name('admin.sanpham.delete');



Route::get('/admin', [ProductController::class, 'admin'])->middleware('role:admin')->name('admin.dashboard');
Route::get('/user', [ProductController::class, 'index'])->middleware('role:user')->name('user.dashboard');

Route::get('/sort-products', [ProductController::class, 'sortProducts'])->name('sort-products');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/product/{id}/updateQuantity', 'ProductController@updateProductQuantity')->name('sanpham.updateQuantity');

require __DIR__.'/auth.php';

