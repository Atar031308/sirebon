<?php

namespace App\Http\Controllers;

use App\Models\MsRekening;
use App\Models\RefBank;
use App\Models\KonfirmasiBayar;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konfirmasi = KonfirmasiBayar::with(['user.Wajib_retribusi'])->get();
        return view('Pembayaran-retribusi', compact('konfirmasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
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

    public function updateStatus(Request $request, $id)
    {
        $konfirmasi = KonfirmasiBayar::find($id);

        if (!$konfirmasi) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        $request->validate([
            'status' => 'required|in:sesuai,tidak_sesuai',
        ]);

        $konfirmasi->status = $request->status === 'sesuai' ? 'S' : 'T';
        $konfirmasi->save();

        return redirect()->back()->with('success', 'Status pembayaran berhasil diperbarui.');
    }
}
