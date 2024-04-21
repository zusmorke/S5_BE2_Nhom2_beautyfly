<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;


Route::get('/', [WelcomeController::class, 'index'])->middleware('auth')->name('index');
Route::get('/contact', [WelcomeController::class, 'contact'])->name('contact');
Route::get('/about', [WelcomeController::class, 'about'])->name('about');
Route::get('/news', [WelcomeController::class, 'news'])->name('news');
Route::get('/danhgia', [WelcomeController::class, 'danhgia'])->name('danhgia');
Route::get('/product', [WelcomeController::class, 'product'])->name('product');
Route::get('/product/{id}', [WelcomeController::class, 'detail'])->name('product.detail');
Route::get('/listProduct', [WelcomeController::class, 'showListProduct']);


Route::get('/news', [WelcomeController::class, 'news'])->name('news');  
Route::get('/pay', [WelcomeController::class, 'pay'])->name('pay');
Route::get('/header', [WelcomeController::class, 'cate'])->name('header');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/apply-discount', [CartController::class, 'applyDiscount'])->name('discount.apply');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

