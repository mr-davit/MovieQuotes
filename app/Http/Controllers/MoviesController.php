<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieStoreRequest;
use App\Http\Requests\MovieUpdateRequest;
use App\Integration\Database\Post;
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

        $request->slug='';
        $movie = new Movie();
        $movie->user_id=auth()->id();
        $movie->slug=$request->slug;
        $movie->setTranslation('title','en', $request->title_en);
        $movie->setTranslation('title','ka', $request->title_ka);
        $movie->save();

//        Movie::create($request->validated()+[
//                'user_id' => auth()->id()
//            ]);
//       $movie->setTranslations('title',$request->title);

        return redirect(route('admin'));

    }

    public function edit(Movie $movie){

        return view('admin.edit-movie',[
            'movie' => $movie
        ]);
    }

    public function update(MovieUpdateRequest $request, Movie $movie ){

        $movie->update($request->validated());
        return redirect(route('admin'));
    }

    public function delete(Movie $movie)

    {
        $movie->delete();
        return back();
    }
}
