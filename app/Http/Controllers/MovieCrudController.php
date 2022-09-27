<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieStoreRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MovieCrudController extends Controller
{

    public function index(Movie $movie){
        return view('admin.index',[
            'movies' => $movie->all(),
            ]);
    }

    public function show(Movie $movie ){
        return view('admin.show',[
            'movie' => $movie,
            'quotes' => $movie->quote,
        ]);
    }

    public function createMovie(){

        return view('admin.create-movie');

    }

    public function storeMovie(MovieStoreRequest $request){



        $attributes['user_id'] = auth()->id();

        Movie::create($request->validated()+[
            'user_id' => auth()->id()
            ]);
        return redirect('/admin/'.$request['movie_slug']);

    }

}
