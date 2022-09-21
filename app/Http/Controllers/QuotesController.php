<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    public function index(Quote $quote){
        return view('welcome',[
            'quotes' => $quote->all()->random()
        ]);
    }
}
