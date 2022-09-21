<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quote extends Model
{
    use HasFactory;

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

