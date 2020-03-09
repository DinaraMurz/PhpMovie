<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password', 'superadmin'
    ];

    public $rules = [
        'username' => 'required|unique:users',
        'password' => 'required|confirmed'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts =[
        'superadmin' => 'boolean'
    ];

    public function setPasswordAttribute($password){
        $this->attributes['password'] = Hash::make($password);
    }

    public function categories(){
        return $this->hasMany(PostCategory::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
