<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kapal;


class KapalRetribusiController extends Controller
{
    public function index()
    {
        $kapals = Kapal::with(['user', 'jenisKapal'])->get();
        return view('User.KapalRetribusi', compact('kapals'));
    }

}
