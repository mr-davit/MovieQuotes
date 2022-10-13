<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Movie extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['title'];

    public mixed $quotes;
    Protected $guarded = ['id'];

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function quote(){
        return $this->hasMany(Quote::class);
    }
}
