<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quote extends Model
{
    use HasFactory;

    public function movies(){
        $this->belongsTo(Movie::class);
    }
    public function users(){
        $this->belongsTo(User::class);
    }
}
