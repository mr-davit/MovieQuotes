<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MovieCrudController extends Controller
{

    public function index(Movie $movie){
        return view('admin.index',[
            'movies' => $movie->all(),
            ]);
    }

    public function createMovie(){

        return view('admin.create-movie');

    }

    public function storeMovie(){

        $attributes = request()->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('movies','slug')]
        ]);

        $attributes['user_id'] = auth()->id();

        Movie::create($attributes);
        return redirect('/admin/'.$attributes['movie_slug']);

    }

}
