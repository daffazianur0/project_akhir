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
