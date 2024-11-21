<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MsRekening;
use App\Models\RefBank;

class RekeningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rekening = MsRekening::all();
        return view('Admin.rekening', compact('rekening'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $refBanks = RefBank::all();
        return view('Admin.Rekening.create', compact('refBanks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_ref_bank' => 'required|exists:ref_bank,id',
            'nama_akun' => 'required|string|max:50',
            'no_rekening' => 'required|string|max:50|unique:ms_rekening,no_rekening',
        ]);

        MsRekening::create($request->all());

        return redirect()->route('rekening.index')->with('success', 'Data rekening berhasil ditambahkan');
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
         $rekening = MsRekening::findOrFail($id);
         $refBanks = RefBank::all();
         return view('Admin.Rekening.edit', compact('rekening', 'refBanks'));
     }


     /**
      * Update the specified resource in storage.
      */
     public function update(Request $request, string $id)
     {
         $request->validate([
             'id_ref_bank' => 'required|exists:ref_bank,id',
             'nama_akun' => 'required|string|max:50',
             'no_rekening' => 'required|string|max:50unique:ms_rekening,no_rekening, . $id,',
         ],[
             'no_rekening' => 'Nomer rekening anda sudah terdaftar',
         ]);

         $rekening = MsRekening::findOrFail($id);

         $rekening->update($request->all());

         return redirect()->route('rekening.index')->with('success', 'Data rekening berhasil ditambahkan.');

     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


        $rekening = MsRekening::findOrFail($id);
        $rekening->delete();
        return redirect()->route('rekening.index')->with('success', 'Data rekening berhasil dihapus.');
    }
    }

