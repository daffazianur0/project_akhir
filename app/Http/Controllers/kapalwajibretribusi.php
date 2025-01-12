<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kapal;
use App\Models\KonfirmasiBayar;

class kapalwajibretribusi extends Controller
{
    public function index(){
        $userId = auth()->user()->id;
        $kapals = KonfirmasiBayar::where('status','Y')->where('id_user', auth()->user()->id)->with(['user', 'kapal'])->get();
        return view('User.KapalRetribusi', compact('kapals'));
    }
}
