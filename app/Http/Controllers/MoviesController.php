<?php

namespace App\Http\Controllers;

use App\Models\Movie;

use App\Models\quote;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(Movie $movie){

        return view('movie',[
            'movie' => $movie,
            'quotes' => $movie->quote
            ]);
    }
}
