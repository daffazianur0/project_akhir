<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MsRekening;
use App\Models\Konfirmasibayar;
use App\Models\RefBank;
use App\Models\wajibRetribusi;

class KonfirmasiPembayaranController extends Controller
{
    public function index()
    {
        $banks = RefBank::all();
        $msRekenings = MsRekening::all();
        return view('User.konfirmasipembayaran', compact('banks', 'msRekenings'));
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'id_ref_bank' => 'required|exists:ref_bank,id',
            'nominal_transfer' => 'required|numeric',
            'id_ms_rekening' => 'required|exists:ms_rekening,id',
            'file_bukti' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);


        $user = auth()->user();

        $msRekening = MsRekening::find($request->id_ms_rekening);

        if (!$msRekening) {
            return back()->withErrors(['id_ms_rekening' => 'Rekening tidak ditemukan.']);
        }

        $filePath = $request->file('file_bukti')->store('bukti_pembayaran', 'public');

        $konfirmasiBayar = new KonfirmasiBayar();
        $konfirmasiBayar->id_user = $user->id;
        $konfirmasiBayar->id_ms_rekening = $request->id_ms_rekening;
        $konfirmasiBayar->file_bukti = $filePath;
        $konfirmasiBayar->tgl_bayar = now();
        $konfirmasiBayar->nama_pemilik_rekening = $msRekening->nama_akun;
        $konfirmasiBayar->id_ref_bank = $request->id_ref_bank;
        $konfirmasiBayar->no_rekening_pemilik = $msRekening->no_rekening;
        $konfirmasiBayar->status = 'P';
        $konfirmasiBayar->save();
        return redirect()->route('konfirmasi.index')->with('success', 'Terima kasih telah membayar retribusi. Mohon tunggu konfirmasi dari admin.');
    }
    public function create()
{
    // Logic untuk menampilkan halaman form pembuatan data
    return view('User.konfirmasi');
}
public function store(Request $request)
{
    // dd($request->all()); // Debug request data

    $request->validate([
        'id_ref_bank' => 'required|exists:ref_bank,id',
        'nominal_transfer' => 'required|numeric',
      'id_ms_rekening' => 'required|exists:ms_rekening,id',
        'file_bukti' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
    ]);

    // Lanjutkan dengan logika penyimpanan...



    // Ambil user yang sedang login
    $user = auth()->user();

    // Cari rekening berdasarkan ID
    $msRekening = MsRekening::find($request->id_ms_rekening);

    if (!$msRekening) {
        return back()->withErrors(['id_ms_rekening' => 'Rekening tidak ditemukan.']);
    }

    // Simpan file bukti pembayaran
    $filePath = $request->file('file_bukti')->store('bukti_pembayaran', 'public');

    // Simpan data konfirmasi pembayaran ke database
    $konfirmasiBayar = new Konfirmasibayar();
    $konfirmasiBayar->id_user = $user->id;
    $konfirmasiBayar->id_ms_rekening = $request->id_ms_rekening;
    $konfirmasiBayar->file_bukti = $filePath;
    $konfirmasiBayar->tgl_bayar = now();
    $konfirmasiBayar->nama_rekening = $msRekening->nama_akun;
    $konfirmasiBayar->id_ref_bank = $request->id_ref_bank;
    $konfirmasiBayar->no_rekening = $msRekening->no_rekening;
    $konfirmasiBayar->status = 'P'; // 'P' untuk status Pending
    $konfirmasiBayar->save();

    // Redirect ke halaman konfirmasi dengan pesan sukses
    return redirect()->route('KonfirmasiPembayaran.index')->with('success', 'Terima kasih telah membayar retribusi. Mohon tunggu konfirmasi dari admin.');
}

}
