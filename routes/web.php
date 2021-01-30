<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
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

Route::prefix("/employees")->group(function(){
    Route::get('/', [EmployeeController::class,"index"])->name("employees.index");
    Route::post('/', [EmployeeController::class,"store"]);
    Route::post('/update/{id}', [EmployeeController::class,"store"]);
});
Route::prefix("/categories")->group(function(){
    Route::get('/', [CategoryController::class,"index"])->name("categories.index");
    Route::post('/', [CategoryController::class,"store"]);
    Route::get('/{id}/edit', [CategoryController::class,"edit"])->name("categories.edit");
    Route::post('/update/{id}', [CategoryController::class,"update"])->name("categories.update");
    Route::get('/delete/{id}', [CategoryController::class,"destroy"])->name("categories.destroy");
});

Route::prefix("/brands")->group(function(){
    Route::get('/', [BrandController::class,"index"])->name("brands.index");
    Route::post('/', [BrandController::class,"store"]);
    Route::get('/{id}/edit', [BrandController::class,"edit"])->name("brands.edit");
    Route::post('/update/{id}', [BrandController::class,"update"])->name("brands.update");
    Route::get('/delete/{id}', [BrandController::class,"destroy"])->name("brands.destroy");
});

Route::prefix("/products")->group(function(){
    Route::get('/', [ProductController::class,"index"])->name("products.index");
    Route::post('/', [ProductController::class,"store"]);
    Route::get('/{id}/edit', [ProductController::class,"edit"])->name("products.edit");
    Route::post('/update/{id}', [ProductController::class,"update"])->name("products.update");
    Route::get('/delete/{id}', [ProductController::class,"destroy"])->name("products.destroy");
});







