<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Photo;


class Gym extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'address',
        'description',
        'photo',

    ];

    public function photos()
    {
        return $this->hasMany(Photo::class, "gym_id", "id");
    }
}
