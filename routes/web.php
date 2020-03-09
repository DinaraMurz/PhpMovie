<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where */

use \Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;

Auth::routes([
    'register' => false,
    'reset' => false
]);
Route::get('/', 'HomeController@index')->name('home');

