<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class UserHomeController extends Controller
{
    public function index()
    {
        return view('user.home.index');
    }
}
