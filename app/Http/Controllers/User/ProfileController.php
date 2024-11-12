<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\wajibRetribusi;

class ProfileController extends Controller
{

    public function index(){
        $wajibRetribusi = wajibRetribusi::where('id_user', auth()->user()->id)->get();
        return view('User.profile');
    }

    public function update(Request $request) {
        $request->validate([
            'username' => 'required|string|max:255',
            'nik' => 'required|string|max:16',
            'namaLengkap' => 'required|string|max:255',
            'telepon' => 'required|string|max:16',
            'alamat' => 'required|string|max:255',
        ]);

        $user = Auth::user();

        $user->name = $request->input('username');
        $user->save();

        $wajibRetribusi = $user->wajibRetribusi;

        foreach ($wajibRetribusi as $wajib) {
            $wajib->nik = $request->input('nik');
            $wajib->nama = $request->input('namaLengkap');
            $wajib->no_hp = $request->input('telepon');
            $wajib->alamat = $request->input('alamat');
            $wajib->save();
        }

        return redirect()->route('profil.index')->with('success', 'Profil berhasil diperbarui!');
}


}

