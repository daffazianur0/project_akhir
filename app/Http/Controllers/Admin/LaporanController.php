<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KonfirmasiBayar;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(Request $request) {
        $pembayaran = KonfirmasiBayar::where('status','Y')->whereBetween('tgl_bayar',[$request->tanggal_awal,$request->tanggal_akhir])->get();
        return view('Admin.Laporan.index',compact('pembayaran'));
    }
}
