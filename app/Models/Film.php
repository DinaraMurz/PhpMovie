<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Film
 * @package App\Models
 *
 * @package $name
 * @package $image_url
 * @package $description
 * @package $actors
 * @package $year
 * @package $rating
 */
class Film extends Model
{
    protected $fillable =[
        'name', 'image_url', 'description', 'actors', 'year', 'rating'
    ];

    public $timestamps = false;

    public $rules = [
        'name' => 'required|max:100',
        'description' => 'required',
        'image_url' => 'required',
        'actors' => 'required',
        'year' => 'required',
        'rating' => 'required|numeric|min:1|max:5'
    ];
}
