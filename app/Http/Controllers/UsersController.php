<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(User $author){
        return view('user',[
            'author' => $author,
            'movies' => $author->movie,
//            'quotes' => $author->movie->Quote
        ]);
    }
}
