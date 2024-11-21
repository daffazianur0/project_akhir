<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RefBank;
use App\Models\MsRekening;
use App\Models\Konfirmasibayar; // Pastikan ini ada
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        // Mengambil data dari database
        $banks = RefBank::all();
        $msRekenings = MsRekening::all();
        $pembayaran = Konfirmasibayar::all(); // Pastikan ini menggunakan model yang benar

        // Mengarahkan data ke view yang benar
        return view('Admin.Pembayaran', compact('banks', 'msRekenings', 'pembayaran'));
    }
}
