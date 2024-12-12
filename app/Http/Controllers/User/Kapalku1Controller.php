<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Kapal;
use Illuminate\Http\Request;

class Kapalku1Controller extends Controller
{
    public function index()
    {

    // Mengambil data kapal beserta relasi jenis kapal
    $kapals = Kapal::with('jenisKapal')->get();

    // Mengirim variabel $kapals ke view
    return view('User.kapalku1', compact('kapals'));
}

    }

