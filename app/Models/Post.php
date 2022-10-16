<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;

class Post extends Model

{
    use HasFactory;

    protected $fillable = [
        "title",
        "date",
        "content",
        "image",
        "category_id",
        "user_id",
        "updated_at",
    ];

    public function category(){
        return $this->belongsTo(Category::class,"category_id","id");
    }

    public function user(){
        return $this->belongsTo(User::class,"user_id","id")->withTrashed();
    }
}
