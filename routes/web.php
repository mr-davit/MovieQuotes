<?php

use App\Http\Controllers\MovieCrudController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuotesCrudController;
use App\Http\Controllers\UsersController;
use App\Models\Movie;
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
Route::get('/login', function (){return view('create');})->name('auth.loginPage')->middleware('guest');
Route::post('login', [AuthController::class, 'login'])->name('auth.login')->middleware('guest');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');


//CRUD OPERATIONS
Route::middleware(['auth'])->group(function () {
Route::controller(MovieCrudController::class)->group(function (){
    Route::get('/admin',  'index')->name('admin');
    Route::get('/admin/show/{movie:slug}', 'show')->name('show-movie');

    Route::get('/admin/create/movie',  function (){
                return view('admin.create-movie');})->name('create-movie');
    Route::post('/admin/create/movie',  'storeMovie')->name('store-movie');

    Route::get('/admin/edit/{movie:slug}', 'edit')->name('edit-movie');
    Route::patch('/admin/edit/{movie:slug}',  'update')->name('update-movie');

    Route::get('/admin/{movie:slug}', 'view')->name('viewmovie');
    Route::delete('/admin/movies/delete/{movie:slug}',  function (Movie $movie){
        $movie->delete();
        return back();
    })->name('delete-movie');
});

Route::controller(QuotesCrudController::class)->group(function (){

    Route::get('/admin/create/quote',  function (){
                return view('admin.create-quote');})->name('create-quote');
    Route::post('/admin/create/movie',  'storeQuote')->name('store-movie');

    Route::get('/admin/edit/{quote}', 'edit')->name('edit-movie');
    Route::post('/admin/edit/{quote}',  'update')->name('update-quote');

    Route::post('/admin/movies/delete/{quote}',  'view')->name('delete-movie');
});
});
