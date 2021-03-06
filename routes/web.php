<?php

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

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

Route::get('/', [AdminController::class, 'home'])->middleware('auth')->name('home');


Route::get('login', [LoginController::class, 'login'])->middleware('guest')->name('login');
Route::post('login', [LoginController::class, 'auth'])->middleware('guest');

Route::get('logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/create', [AdminController::class, 'create'])->middleware('auth')->name('create');
Route::post('/create', [AdminController::class, 'store'])->middleware('auth');

Route::get('/edit/{id}', [AdminController::class, 'edit'])->middleware('auth')->name('edit');
Route::post('/edit/{id}', [AdminController::class, 'update'])->middleware('auth');
