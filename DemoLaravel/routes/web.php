<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

Route::get('/product', [ProductController::class, 'index'])->name('listProduct');
Route::get('/createProduct', [ProductController::class, 'create'])->name('createProduct');
Route::post('/product', [ProductController::class, 'store'])->name('product');

// Route::get('/user', [UserController::class, 'index'])->name('listUser');
// Route::get('/createUser', [UserController::class, 'create'])->name('createUser');
// Route::post('/user', [UserController::class, 'store'])->name('user');
// Route::get('/editUser', [UserController::class, 'edit'])->name('editUser');
Route::resource('users', UserController::class);