<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class QuoteStoreRequest extends FormRequest
{

    public function rules()
    {
        return [
            'body' => 'required',
            'thumbnail' => 'required|image',
            'movie_id' => ['required', Rule::exists('quotes', 'movie_id')]
        ];
    }
}
