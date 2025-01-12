<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('Admin.kategori-retribusi', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|string|max:50|unique:kategori,Kategori',
        ], [
            'kategori.required' => 'kategori tidak boleh sama',
    ]);

        kategori::create([
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('kategori.index')->with('success', 'Data kategori berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

            $kategori = Kategori::findOrFail($id);
            return view('Admin.Kategori.edit', compact('kategori'));
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'kategori' => 'required|string|max:50|unique:kategori,Kategori',
        ], [
            'kategori.required' => 'kategori tidak boleh sama',
    ]);

        $kategori = Kategori::findOrFail($id);
        $kategori->update($request->all());

        return redirect()->route('kategori.index')->with('success', 'Data rekening berhasil ditambahkan.');
    }


    public function destroy(string $id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('kategori.index')->with('success', 'Data kategori berhasil dihapus.');
    }
}
