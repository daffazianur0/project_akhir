<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Kapal;
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
        return view('User.konfirmasi');
    }
    public function store(Request $request)
    {

        $request->validate([
            'id_ref_bank' => 'required|exists:ref_bank,id',
            'id_ms_rekening' => 'required|exists:ms_rekening,id',
            'file_bukti' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);
        $rekening = MSrekening::where('id', $request->id_ms_rekening)->first();

        if (!$rekening) {
            return back()->withErrors(['id_ms_rekening' => 'Rekening tidak ditemukan.']);
        }

        // Simpan file bukti pembayaran
        $filePath = $request->file('file_bukti')->store('bukti_pembayaran', 'public');

        $pembayaran = new KonfirmasiBayar();
        $pembayaran->id_user = auth()->user()->id;
        $pembayaran->id_ref_bank = $request->id_ref_bank;
        $pembayaran->id_ms_rekening = $request->id_ms_rekening;
        $pembayaran->file_bukti = $filePath;
        $pembayaran->tgl_bayar = now();
        $pembayaran->nama_rekening = $rekening->nama_akun;
        $pembayaran->no_rekening = $rekening->no_rekening;
        $pembayaran->nominal_transfer = $request->nominal_transfer;
        $pembayaran->status = 'P';
        $pembayaran->kapal_id = $request->kapal;
        $pembayaran->save();

        $kapal = Kapal::findOrFail($request->kapal);
        $kapal->update([
            'konfirmasi_bayar_id' => $request->kapal
        ]);

        return back()->withSuccess('Data berhasil ditambahkan');
    }

    public function updateStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required',
        ]);

        $konfirmasiBayar = Konfirmasibayar::findOrFail($id);

        $status = $request->status;

        $konfirmasiBayar->status = $status;
        $konfirmasiBayar->tindaklanjut_tgl = now();
        $konfirmasiBayar->tindaklanjut_user = 'Admin';
        $konfirmasiBayar->save();

        $kapals = wajibRetribusi::all();

        if ($status == 'Y') {
            $kapal = Kapal::where('id_user', $konfirmasiBayar->id_user)->whereNull('konfirmasi_bayar_id');
            $kapal->update([
                'konfirmasi_bayar_id' => $konfirmasiBayar->id
            ]);
        } else {
            $kapal = Kapal::where('id_user', $konfirmasiBayar->id_user)->whereNotNull('konfirmasi_bayar_id');
            $kapal->update([
                'konfirmasi_bayar_id' => null
            ]);
        }

        return redirect()->route('pembayaran.index')->with([
            'success' => 'Status berhasil diperbarui.',
            'kapals' => $kapals
        ]);
    }
}
