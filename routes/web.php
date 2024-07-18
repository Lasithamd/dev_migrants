<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CommentController;
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

Route::get('/',[HomeController::class,'index']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/ads-categories',[AdsController::class, 'loadList']);
Route::get('/ads-details/{id}',[AdsController::class,'show'])->name('ads-details');
Route::get('/ads-categories/{id}',[AdsController::class, 'loadCategories'])->name('ads-categories');

Route::get('/ads/register', [RegisterController::class,'register'])->name('ads.register');
Route::post('/ads/register-next', [RegisterController::class,'registerNext'])->name('register-next');
Route::get('/ads/resgister-third', [RegisterController::class,'resgisterThird'])->name('resgister-third');
Route::post('/ads/final-step', [RegisterController::class,'finalStep'])->name('final-step');
Route::get('/ads/myads/', [RegisterController::class,'myAds'])->name('ads.myads');

Route::get('/ads-categories/{id}',[AdsController::class, 'loadCategories'])->name('ads-categories');
Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');

Route::get('serach-ad', [AdsController::class, 'search'])->name('serach-ad');
