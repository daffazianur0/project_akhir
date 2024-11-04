<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Kapalku1Controller extends Controller
{
    public function index()
    {
        return view('User.kapalku1');
    }
}
