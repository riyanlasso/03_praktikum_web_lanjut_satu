<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;

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

Route::get('home', [HomeController::class, 'home']);


Route::prefix('/category')->group(function () {
    Route::get('/product', [ProductController::class, 'product']);
});

Route::get('/news/{topik}', function ($topik) {
    return redirect('https://www.educastudio.com/news/' . $topik);
});

Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'program']);
    Route::get('/magang', [ProgramController::class, 'program']);
    Route::get('/kunjunganindustri', [ProgramController::class, 'program']);
});

Route::get('about', [AboutController::class, 'about']);
Route::get('contact', [ContactController::class, 'contact']);
