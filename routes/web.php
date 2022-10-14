<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\LanguageController;
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


Route::get('/', [LandingController::class, 'index'])->name('home');

Route::get('/movie/{movie:slug}', [MoviesController::class, 'index'])->name('movie.index');

Route::get('/author/{author:username}', [UsersController::class, 'index'])->name('author.index');
//language

Route::get('/change-language/{locale}',[LanguageController::class, 'change'])->name('language.change');

//authorisation
Route::get('/login', function (){return view('login');})->name('auth.loginPage')->middleware('guest');

Route::post('login', [AuthController::class, 'login'])->name('auth.login')->middleware('guest');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');


//CRUD OPERATIONS
Route::middleware(['auth'])->group(function () {
Route::controller(MoviesController::class)->group(function (){
    Route::get('/admin',  'admin')->name('admin');

    Route::get('/admin/movies/{movie:slug}', 'show')->name('movie.show');

    Route::get('/admin/movie/create/',  function (){
                return view('admin.create-movie');})->name('movie.create');

    Route::post('/admin/movie/create/',  'store')->name('movie.store');

    Route::get('/admin/movies/edit/{movie:slug}', 'edit')->name('movie.edit');
    Route::patch('/admin/movies/{movie:slug}',  'update')->name('movie.update');


    Route::delete('/admin/movies/{movie:slug}', 'delete'
    )->name('movie.delete');
});

Route::controller(QuotesController::class)->group(function (){

    Route::get('/admin/movies/{movie:slug}/quotes/create',  function (Movie $movie){
                return view('admin.create-quote',[
                    'movie' => $movie
                    ]
                );})->name('quote.create');

    Route::post('/admin/movies/{movie:slug}/quotes/create/',  'store')->name('quote.store');

    Route::get('/admin/movies/{movie:slug}/quotes/{quote}/edit', 'edit')->name('quote.edit');

    Route::patch('/admin/movies/{movie:slug}/quotes/{quote}',  'update')->name('quote.update');

    Route::delete('/admin/movies/{movie:slug}/quotes/{quote}',  'delete')->name('quote.delete');
});
});

