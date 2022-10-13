<?php

namespace App\Http\Requests;

use App\Models\Movie;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MovieStoreRequest extends FormRequest
{
    public mixed $slug;
    public mixed $title;


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title_en' => 'required',
            'title_ka' => 'required',
            'slug' => ['required', Rule::unique('movies','slug')]
        ];
    }
}
