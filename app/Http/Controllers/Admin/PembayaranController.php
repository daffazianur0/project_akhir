<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; // Tambahkan ini
use App\Models\MsRekening;
use App\Models\RefBank;
use App\Models\KonfirmasiBayar;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $pembayaran = KonfirmasiBayar::with(['user.wajibRetribusi'])->get();
        return view('Admin.Pembayaran', compact('pembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function updateStatus(Request $request, $id)
{
    $validated = $request->validate([
        'status' => 'required|in:sesuai,tidak_sesuai',
    ]);

    $konfirmasiBayar = KonfirmasiBayar::findOrFail($id);

    $konfirmasiBayar->status = $validated['status'] === 'sesuai' ? 'Y' : 'N';
    $konfirmasiBayar->tindaklanjut_tgl = now();
    $konfirmasiBayar->tindaklanjut_user = 'Admin';
    
    $konfirmasiBayar->save();

    return redirect()->back()->with('success', 'Status berhasil diperbarui.');
}

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
