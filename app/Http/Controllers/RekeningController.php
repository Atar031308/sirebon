<?php

namespace App\Http\Controllers;
use App\Models\MsRekening;
use App\Models\RefBank;
use Illuminate\Http\Request;

class RekeningController extends Controller
{
    public function index(){
        $rekening = MsRekening::all();
        return view('Rekening', compact('rekening'));
    }

    public function create(){

    
        $refBanks= RefBank::all();
        return view('Admin.Rekening.create', compact('refBanks'));
    
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_ref_bank' => 'required|exists:ref_bank,id',
            'nama_akun' => 'required|string|max:50',
            'no_rekening' => 'required|string|max:50',
        ]);

        MsRekening::create($request->all());

        return redirect()->route('rekening.index')->with('success', 'Data rekening berhasil ditambahkan.');
    }
      
public function destroy(string $id)
    {

        $rekening = MsRekening::findOrFail($id);
        $rekening->delete();
        return redirect()->route('rekening.index')->with('success', 'Data rekening berhasil dihapus.');
    }
    
}
