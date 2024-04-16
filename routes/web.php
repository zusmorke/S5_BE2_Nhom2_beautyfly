<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;


Route::get('/', [WelcomeController::class, 'index'])->middleware('auth')->name('index');
Route::get('/contact', [WelcomeController::class, 'contact'])->name('contact');
Route::get('/about', [WelcomeController::class, 'about'])->name('about');
Route::get('/news', [WelcomeController::class, 'news'])->name('news');
Route::get('/danhgia', [WelcomeController::class, 'danhgia'])->name('danhgia');
Route::get('/product', [WelcomeController::class, 'product'])->name('product');
Route::get('/listProduct', [WelcomeController::class, 'product']);
Route::get('/cart', [WelcomeController::class, 'cart'])->name('cart');
<<<<<<< HEAD
Route::get('/news', [WelcomeController::class, 'news'])->name('news');  
Route::get('/pay', [WelcomeController::class, 'pay'])->name('pay');
Route::get('/header', [WelcomeController::class, 'cate'])->name('header');

=======
Route::get('/news', [WelcomeController::class, 'news'])->name('news');
Route::get('/pay', [WelcomeController::class, 'pay'])->name('pay');
>>>>>>> 0a1083de38872e07658b2ed8ee7bf9013b57a239


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

