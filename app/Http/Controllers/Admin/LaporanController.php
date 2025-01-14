<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\KonfirmasiBayar;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    public function index(Request $request) {
        $pembayaran = KonfirmasiBayar::where('status','Y')->whereBetween('tgl_bayar',[$request->tanggal_awal,$request->tanggal_akhir])->get();
        return view('Admin.Laporan.index',compact('pembayaran'));
    }


public function cetakMpdf()
    {
        // Data untuk laporan
        $data = [
            ['no' => 1, 'nama' => 'Nama Contoh', 'tanggal' => '2025-01-01', 'nominal' => 'Rp 1.000.000', 'bank' => 'Bank ABC'],
        ];

        $data = KonfirmasiBayar::where('status','Y')->get();

    	$pdf = Pdf::loadview('Admin.Laporan.pdf',
                ['data'=>$data]
            );

    	return $pdf->stream('laporan-pegawai.pdf');
    }

}
