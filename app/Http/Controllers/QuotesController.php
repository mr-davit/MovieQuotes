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


        $user = auth()->id();

       $quote = new Quote();
        $quote->user_id = $user;
        $quote->movie_id = $movie->id;
        $quote->setTranslation('body','en', $request->body_en);
        $quote->setTranslation('body','ka', $request->body_ka);
        $quote->save();

        return redirect(route('admin'));

    }

    public function edit(Movie $movie){

        return view('admin.edit-quote',[
            'movie' => $movie
        ]);
    }

    public function update(QuoteUpdateRequest $request, Quote $quote){
        $quote->update([
            'body' => ['en'=> $request->body_en,
                'ka'=> $request->body_ka,   ],
            'thumbnail' => $request->thumbnail
        ]);
        return redirect(route('admin'));
    }

    public function delete( Movie $movie){


        $movie->quote->first()->delete();
        return back();

    }
}
