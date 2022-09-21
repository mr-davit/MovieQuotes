<?php

namespace App\Http\Controllers;

use App\Models\quote;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    public function index(quote $quote){
        return view('welcome',[
            'quotes' => $quote->all()->random()
        ]);
    }
}
