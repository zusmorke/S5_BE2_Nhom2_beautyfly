<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\luuThongTinLienHe;

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

Route::get('/{page?}', [WelcomeController::class, 'page']); // Sử dụng route pattern khác cho phương thức page
Route::get('/contact/{page?}', [WelcomeController::class, 'contact']);
Route::get('/danhgia/{page?}', [WelcomeController::class, 'danhgia']);
 // Sử dụng route pattern khác cho phương thức contact
