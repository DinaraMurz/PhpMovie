<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $fillable = [
        'name', 'user_id'
    ];

    public $rules = [
        'name' => 'required|min:5',
        'user_id' => 'required|exists:users,id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function posts(){
        return $this->hasMany(Post::class);
    }
}
