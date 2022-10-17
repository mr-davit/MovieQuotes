<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuoteStoreRequest;
use App\Http\Requests\QuoteUpdateRequest;
use App\Models\Movie;
use App\Models\Quote;
use Auth;
use Illuminate\Http\Request;

class QuotesController extends Controller
{

    public function store(QuoteStoreRequest $request){

        Quote::create([
            'user_id' => Auth::id(),
            'movie_id' => $request->movie_id,
            'thumbnail' => $request->file('thumbnail')->store('thumbnails'),
            'body' => ['en'=> $request->body_en,
                'ka'=> $request->body_ka ],
        ]);


        return redirect(route('admin'));

    }

    public function edit(Movie $movie, Quote $quote){

        return view('admin.edit-quote',[
            'movie' => $movie,
            'quote' => $quote
        ]);
    }

    public function update(QuoteUpdateRequest $request, Movie $movie, Quote $quote){

        $attributes =  ['body' => ['en'=> $request->body_en,

            'ka'=> $request->body_ka,   ],

        ];

        if (isset($request->thumbnail)){
            $attributes['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
        }
        $quote->update($attributes);
        return redirect(route('admin'));
    }

    public function delete( Movie $movie){


        $movie->quote->first()->delete();
        return back();

    }
}
