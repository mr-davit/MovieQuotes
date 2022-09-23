<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use League\CommonMark\Extension\SmartPunct\Quote;

class UsersController extends Controller
{
    public function index(User $author){
        return view('user',[
            'author' => $author,
            'movies' => $author->movie,
//            'quotes' => \App\Models\Quote::where('movie_id','movie')
        ]);
    }
}
