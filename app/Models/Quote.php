<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Quote extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['body'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

