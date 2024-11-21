<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriRetribusiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $kategori = Kategori::all();
        return view('Kategori-retribusi', compact('kategori'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(){

    
        return view('Admin.kategori.create');
    
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|string|max:50|unique:kategori,kategori',
        ], [
            'kategori.required' => 'Nama kategori wajib diisi.',
            'kategori.unique' => 'Nama kategori sudah terdaftar. Gunakan nama lain.',
        ]);

        Kategori::create($request->all());

        return redirect()->route('kategori.index')->with('success', 'Data rekening berhasil ditambahkan.');
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
        $kategori = Kategori::findOrFail($id);
        return view('Admin.kategori.edit', compact('kategori'));
    }

    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kategori' => 'required|string|max:50|unique:kategori,kategori,' . $id,
        ], [
            'kategori.required' => 'Nama kategori wajib diisi.',
            'kategori.unique' => 'Nama kategori sudah terdaftar. Gunakan nama lain.',
        ]);


        $kategori = Kategori::findOrFail($id);
        $kategori->update($request->all());

        return redirect()->route('kategori.index')->with('success', 'Data rekening berhasil ditambahkan.');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $kategori = kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('kategori.index')->with('success', 'Data rekening berhasil dihapus.');
    }
}
