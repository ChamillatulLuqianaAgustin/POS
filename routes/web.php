<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Halaman Home
Route::get('/home', [HomeController::class, 'index']);

//Halaman Products
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/category/food-beverage', [ProductsController::class, 'beverage']);
Route::get('/category/beauty-health', [ProductsController::class, 'health']);
Route::get('/category/home-care', [ProductsController::class, 'care']);
Route::get('/category/baby-kid', [ProductsController::class, 'kid']);

//Halaman User
Route::get('/user/{id}/name/{name}', [UserController::class, 'index']);

//Halaman Penjualan
Route::get('/penjualan', [PenjualanController::class, 'index']);