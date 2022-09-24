<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create(){
        return view('create');
    }
public function store(){
        return view('welcome', [

        ]);
}

}

return view('movie',[
    'movie' => $movie,
    'quotes' => $movie->quote
]);
