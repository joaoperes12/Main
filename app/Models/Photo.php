<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    public function gym()
    {
        return $this->belongsTo(Gym::class, "gym_id", "id");
    }
}
