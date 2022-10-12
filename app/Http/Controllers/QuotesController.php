<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuoteStoreRequest;
use App\Http\Requests\QuoteUpdateRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuotesController extends Controller
{

    public function store(QuoteStoreRequest $request, Movie $movie){

        $movie->quote()->create($request->validated()+[
                'user_id' => auth()->id(),
                'movie_id' => $request->input('movie_id'),
                'thumbnail' => $request->file('thumbnail')->store('thumbnails')
            ]);
        return redirect(route('admin'));

    }

    public function edit(Movie $movie){

        return view('admin.edit-quote',[
            'movie' => $movie
        ]);
    }

    public function update(QuoteUpdateRequest $request, Movie $movie){

    }

    public function delete( Movie $movie){


        $movie->quote->first()->delete();
        return back();

    }
}
