<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kapal;
use App\Models\KonfirmasiBayar;

class KapalRetribusiController extends Controller
{
    public function index()
    {
        $kapals = KonfirmasiBayar::where('status','Y')->where('id_user', auth()->user()->id)->with(['user', 'jenisKapal', 'kapal']);
        return view('User.KapalRetribusi', compact('kapals'));
    }


}
