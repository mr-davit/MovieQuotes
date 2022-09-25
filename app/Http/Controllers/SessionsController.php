<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SessionsController extends Controller
{
    public function create(){
        return view('create');
    }
public function store(){
    $attributes = request() -> validate([
        'email' => 'required',
        'password' => 'required'
    ]);

    if (auth()->attempt($attributes)) {

        session()->regenerate();
        return redirect('/')->with('success', 'you logged in');
    }

    return back()->withInput()->withErrors(['email'=>'your email and password doesnt match']);
}

public function destroy(){
        auth()->logout();
        return redirect('/');
}

}


