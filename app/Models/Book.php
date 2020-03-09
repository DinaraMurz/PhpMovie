<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Book
 * @package App\Models
 *
 * @property $name
 * @property $page_count
 */
class Book extends Model
{
    protected $fillable =[
        'name', 'page_count'
    ];
}
