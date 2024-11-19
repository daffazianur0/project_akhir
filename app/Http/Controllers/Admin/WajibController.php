<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kelurahan;
use App\Models\User;
use App\Models\WajibRetribusi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WajibController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wajibRetribusi = WajibRetribusi::all();
        return view('Admin.wajib', compact('wajibRetribusi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelurahan = Kelurahan::all();
        $user = User::all();
        return view('Admin.wajib-retribusi.create', compact('kelurahan', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'no_hp' => 'required|string|max:16',
            'nik' => 'required|string|max:16',
            'alamat' => 'required|string',
            'id_kelurahan' => 'required|exists:kelurahan,id',
            'status' => 'required|in:A,B',
        ]);

        WajibRetribusi::create([
            'id_user' => auth()->id(),
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'id_kelurahan' => $request->id_kelurahan,
            'status' => $request->status,
        ]);

        return redirect()->route('wajib.index')->with('success', 'Data rekening berhasil ditambahkan.');
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $wajibretribusi = WajibRetribusi::findOrFail($id);
        $kelurahan = Kelurahan::all();
        return view('Admin.wajib-retribusi.edit', compact('wajibretribusi', 'kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'no_hp' => 'required|string|max:16',
            'nik' => 'required|string|max:16',
            'alamat' => 'required|string',
            'id_kelurahan' => 'required|exists:kelurahan,id',
            'status' => 'required|in:A,B',
        ]);

        $wajibretribusi = WajibRetribusi::findOrFail($id);
        $wajibretribusi->update([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'id_kelurahan' => $request->id_kelurahan,
            'status' => $request->status,
        ]);

        return redirect()->route('wajib.index')->with('success', 'Data rekening berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $wajibretribusi = WajibRetribusi::findOrFail($id);
        $wajibretribusi->delete();
        return redirect()->route('wajib.index')->with('success', 'Data wajib retribusi berhasil dihapus.');
    }
}
