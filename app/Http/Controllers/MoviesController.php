<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieStoreRequest;
use App\Http\Requests\MovieUpdateRequest;
use App\Integration\Database\Post;
use App\Models\Movie;

use App\Models\quote;
use Auth;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(Movie $movie){

        return view('movie',[
            'movie' => $movie,
            'quotes' => $movie->quote
            ]);
    }


    public function admin(Movie $movie){
        return view('admin.index',[
            'movies' => $movie->all(),
        ]);
    }

    public function show(Movie $movie ){
        return view('admin.show',[
            'movie' => $movie,
            'quotes' => $movie->quote
        ]);
    }



    public function store(MovieStoreRequest $request){


        $movie = new Movie();
        $movie->user_id = Auth::id();
        $movie->slug = $request->slug;
        $movie->setTranslation('title','en', $request->title_en);
        $movie->setTranslation('title','ka', $request->title_ka);
        $movie->save();

        return redirect(route('admin'));


    }

    public function edit(Movie $movie){

        return view('admin.edit-movie',[
            'movie' => $movie
        ]);
    }

    public function update(MovieUpdateRequest $request, Movie $movie ){

        $movie->update([
            'title' => ['en'=> $request->title_en,
                'ka'=> $request->title_ka,   ],
            'slug' => $request->slug
        ]);
        return redirect(route('admin'));
    }

    public function delete(Movie $movie)

    {
        $movie->delete();
        return back();
    }
}
