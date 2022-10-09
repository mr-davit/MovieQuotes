<?php

namespace App\Http\Requests;

use App\Models\Movie;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MovieUpdateRequest extends FormRequest
{

    public function rules(Movie $movie)
    {
        return [
            'title' => 'required',
            'slug' => ['required', Rule::unique('movies','slug')->ignore($this->movie)]
        ];
    }
}
