<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function loginPage(){
        return view('create');
    }
public function login(LoginUserRequest $request){


        auth()->attempt($request->validated());
        return redirect('/')->with('success', 'you logged in');

}

public function logout(){
        auth()->logout();
        return redirect(route('home'));
}

}


