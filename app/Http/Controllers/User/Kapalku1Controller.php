<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Kapal;
use Illuminate\Http\Request;

class Kapalku1Controller extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;
        $kapals = Kapal::where('id_user', $userId)->get();

        return view('User.kapalku1', compact('kapals'));
    }

    }

