<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kapal;


class kapalwajibretribusi extends Controller
{
    public function index(){
        $userId = auth()->user()->id;
        $kapals = Kapal::where('id_user', $userId)->get();

        return view('User.KapalRetribusi', compact('kapals'));
    }
}
