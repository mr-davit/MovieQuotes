<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function loginPage(){
        return view('create');
    }
public function login(){
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

public function logout(){
        auth()->logout();
        return redirect('/');
}

}


