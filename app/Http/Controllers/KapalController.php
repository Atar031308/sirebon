<?php

namespace App\Http\Controllers;
use App\Models\Kapal;
use App\Models\RefJenisKapal;
use App\Models\Wajib_retribusi;
use Illuminate\Http\Request;

class KapalController extends Controller
{
    public function index(){
        $kapal= Kapal::all();
        return view('Kapal-retribusi', compact('kapal')) ;
    } 

    public function create()
    {
        $jeniskapal = RefJenisKapal::all();
        $pemilikKapal = Wajib_retribusi::all();
        return view('Admin.Kapal.create', compact('jeniskapal','pemilikKapal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nama_kapal' => 'required|string|max:50',
        'id_jenis_kapal' => 'required|exists:ref_jenis_kapal,id',
        'ukuran' => 'required|string|max:50',
        'id_wajib_retribusi' => 'required|exists:wajib_retribusi,id',
    ]);

    $wajibRetribusi = Wajib_retribusi::find($request->id_wajib_retribusi);

    Kapal::create([
        'id_user' => auth()->id(),
        'id_wajib_retribusi' => $wajibRetribusi->id,
        'nama_pemilik' => $wajibRetribusi->nama,
        'nama_kapal' => $request->nama_kapal,
        'id_jenis_kapal' => $request->id_jenis_kapal,
        'ukuran' => $request->ukuran,
    ]);
    
    

    return redirect()->route('Kapal.index')->with('success', 'Data kapal berhasil ditambahkan.');
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
        $kapal = Kapal::findOrFail($id);
        $jeniskapal = RefJenisKapal::all();
        $pemilikKapal = Wajib_retribusi::all();
        return view('Admin.Kapal.edit', compact('kapal', 'jeniskapal', 'pemilikKapal'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kapal' => 'required|string|max:50',
            'id_jenis_kapal' => 'required|exists:ref_jenis_kapal,id',
            'ukuran' => 'required|string|max:50',
            'id_wajib_retribusi' => 'required|exists:wajib_retribusi,id',
        ]);

        $kapal = Kapal::findOrFail($id);
        $kapal->update($request->all());

        return redirect()->route('Kapal.index')->with('success', 'Data kapal berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kapal = Kapal::findOrFail($id);
        $kapal->delete();
        return redirect()->route('Kapal.index')->with('success', 'Data kapal berhasil dihapus.');
    }
}
