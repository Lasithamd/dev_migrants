<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdsController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\ProvinceController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;

Route::prefix('dashboard')->group(function() {
    Route::get('/', [DashboardController::class, 'index']);
});

Route::prefix('ads')->group(function() {
    Route::get('/', [App\Http\Controllers\Admin\AdsController::class, 'index']);
    Route::get('/show/{id}', [App\Http\Controllers\Admin\AdsController::class, 'show']);
    
});
Route::prefix('district')->group(function() {
    Route::get('/', [DashboardController::class, 'index']);
});
Route::get('/admin/',[DashboardController::class,'index']);

Route::get('/admin/district', [DistrictController::class,'index'])->name('admin.district');
Route::get('/admin/district/create', [DistrictController::class,'create'])->name('admin.district.create');
Route::post('/admin/district/store', [DistrictController::class,'store'])->name('admin.district.store');

Route::get('/admin/city', [CityController::class,'index'])->name('admin.city');
Route::get('/admin/city/create', [CityController::class,'create'])->name('admin.citys.create');
Route::post('/admin/city/store', [CityController::class,'store'])->name('admin.city.store');

Route::get('/admin/province', [ProvinceController::class,'index'])->name('admin.province');
Route::get('/admin/province/create', [ProvinceController::class,'create'])->name('admin.province.create');
Route::post('/admin/province/store', [ProvinceController::class, 'store'])->name('admin.province.store');

Route::get('/admin/category', [CategoryController::class,'index'])->name('admin.category');
Route::get('/admin/category/create', [CategoryController::class,'create'])->name('admin.category.create');
Route::post('/admin/category/store', [CategoryController::class,'store'])->name('admin.category.store');
Route::get('/admin/category/{id}/edit', [CategoryController::class,'edit'])->name('admin.category.store');
Route::put('/admin/category/{id}/update', [CategoryController::class,'update'])->name('admin.category.update');

Route::get('/admin/sub-category/create', [SubCategoryController::class,'create'])->name('admin.sub-category.create');
Route::post('/admin/sub-category/store', [SubCategoryController::class,'store'])->name('admin.sub-category.store');

Route::get('/admin/sub-category', [SubCategoryController::class,'index'])->name('admin.sub-category');
Route::get('/admin/skill', [CityController::class,'index'])->name('admin.skill');

