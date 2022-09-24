<?php

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UsersController;
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


Route::get('/', [QuotesController::class, 'index'])->name('home');
Route::get('/movie/{movie:slug}', [MoviesController::class, 'index'])->name('bymovie');
Route::get('/author/{author:username}', [UsersController::class, 'index'])->name('bymovie');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
