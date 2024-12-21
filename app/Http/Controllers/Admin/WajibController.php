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
            'name' => 'required|string|max:50',
            'no_hp' => 'required|string|max:16|unique:wajib_retribusi,no_hp,',
            'nik' => 'required|string|max:16|unique:wajib_retribusi,nik',
            'alamat' => 'required|string',
            'id_kelurahan' => 'required|exists:kelurahan,id',
            'status' => 'required|in:A,B',
            'name' => 'required|string|max:255',
            'email' => 'required|max:255|',
            'password' => 'required|string|min:8|max:255',
        ], [
            'name.required' => 'Nama lengkap wajib diisi.',
            'no_hp.required' => 'Nomor telepon wajib diisi.',
            'no_hp.required' => 'Nomor telepon maksimal 16.',
            'no_hp.unique' => 'Nomor telepon sudah digunakan.',
            'nik.required' => 'NIK wajib diisi.',
            'nik.unique' => 'NIK sudah terdaftar.',
            'alamat.required' => 'Alamat wajib diisi.',
            'id_kelurahan.required' => 'Kelurahan wajib dipilih.',
            'id_kelurahan.exists' => 'Kelurahan tidak valid.',
            'status.required' => 'Status wajib dipilih.',
            'status.in' => 'Status tidak valid.',
            'name.required' => 'Username wajib diisi.',
            'name.unique' => 'Username sudah terdaftar.',
            'email.required' => 'Email wajib diisi.',
            'email.max' => 'Format email tidak valid.',

            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 8 karakter.',
            'password.max' => 'Password maksimal 255 karakter.',
        ]);


        $user = new User();
        $user->level = 'karyawan';
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $wajibRetribusi = new WajibRetribusi();
        $wajibRetribusi->id_user = $user->id;
        $wajibRetribusi->nama = $request->nama;
        $wajibRetribusi->no_hp = $request->no_hp;
        $wajibRetribusi->nik = $request->nik;
        $wajibRetribusi->alamat = $request->alamat;
        $wajibRetribusi->id_kelurahan = $request->id_kelurahan;
        $wajibRetribusi->status = $request->status;
        $wajibRetribusi->save();


        return redirect()->route('wajib.index')->with('success', 'Data  berhasil ditambahkan.');

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
            'no_hp' => 'required|string|max:16|unique:wajib_retribusi,no_hp',
            'nik' => 'required|string|max:16',
            'alamat' => 'required|string',
            'id_kelurahan' => 'required|exists:kelurahan,id',
            'status' => 'required|in:A,B',
        ], [
            'nama.required' => 'Nama lengkap wajib diisi.',
            'no_hp.required' => 'Nomor telepon sudah digunakan.',
            'no_hp.unique' => 'Nomor telepon sudah digunakan.', 
            'nik.required' => 'NIK wajib diisi.',
            'alamat.required' => 'Alamat wajib diisi.',
            'id_kelurahan.required' => 'Kelurahan wajib dipilih.',
            'id_kelurahan.exists' => 'Kelurahan tidak valid.',
            'status.required' => 'Status wajib dipilih.',
            'status.in' => 'Status tidak valid.',
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
