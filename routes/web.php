<?php

use App\Http\Controllers\MovieCrudController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\AuthController;
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
Route::get('/author/{author:username}', [UsersController::class, 'index'])->name('byauthor');


//authorisation
Route::get('login', [AuthController::class, 'loginPage'])->name('auth.loginPage')->middleware('guest');
Route::post('login', [AuthController::class, 'login'])->name('auth.login')->middleware('guest');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');


//CRUD OPERATIONS
Route::middleware(['auth'])->group(function () {
Route::controller(MovieCrudController::class)->group(function (){
    Route::get('/admin',  'index')->name('admin');
    Route::get('/admin/show/{movie:slug}', 'show')->name('show-movie');

    Route::get('/admin/create/movie',  'createMovie')->name('create-movie');
    Route::post('/admin/create/movie',  'storeMovie')->name('store-movie');

    Route::get('/admin/edit/{movie:slug}', 'edit')->name('edit-movie');
    Route::post('/admin/edit/{movie:slug}',  'update')->name('update');

    Route::get('/admin/{movie:slug}', 'view')->name('viewmovie');
    Route::post('/admin/movies/delete/{$movie:slug}',  'view')->name('deletemovie');
});
});
