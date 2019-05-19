<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = []; // not recommended

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
