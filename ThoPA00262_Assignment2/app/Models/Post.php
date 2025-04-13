<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['name', 'description', 'detail', 'image', 'viewers', 'category'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category'); 
    }
}