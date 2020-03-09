<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){
        return view('admin.pages.users.index',
            ['users' => User::all()]);
    }
}
