<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class QuoteStoreRequest extends FormRequest
{

    public function rules()
    {
        return [
            'body_en' => 'required',
            'body_ka' => 'required',
            'thumbnail' => 'required|image',
            'movie_id' => ['required', Rule::exists('movies', 'id')]
        ];
    }
}
