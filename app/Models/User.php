<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Post;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'photo',
        'name',
        'email',
        'password',
        'birthdate',
        'nif',
        'contact',
        'gender',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */

    public function posts(){
        return $this->hasMany(Post::class,"user_id","id");
    }

    public function roleToStr(){
        switch($this->role){
            case 'C':
            return 'Cliente';
            case 'A':
            return 'Admin';
            case 'N':
            return 'Nutri';
            case 'P':
            return 'PT';
        }
    }

    public function isAdmin(){
        return $this->role=='C';
    }

    protected $hidden = [
        'password',
        'password_confirmation',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
