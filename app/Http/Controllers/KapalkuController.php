<?php

namespace App\Http\Controllers;

use App\Models\Kapal;
use Illuminate\Http\Request;
use App\Models\RefJenisKapal;
use App\Models\Wajib_retribusi;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class KapalkuController extends Controller
{
   public function index(Request $request)
{
    $currentUser = Auth::user();
    Log::info('User Login:', ['id' => $currentUser->id]);

    $kapalsQuery = Kapal::with(['user.Wajib_retribusi', 'jenisKapal'])
        ->where('id_user', $currentUser->id);

    if ($request->has('search') && $request->search) {
        $search = $request->search;
        $kapalsQuery->where(function ($query) use ($search) {
            $query->where('nama_kapal', 'like', "%$search%")
                ->orWhereHas('user.Wajib_retribusi', function ($subQuery) use ($search) {
                    $subQuery->where('nama', 'like', "%$search%");
                });
        });
    }

    $kapalData = $kapalsQuery->get();
    Log::info('Data Kapal:', $kapalData->toArray());
    session(['kapalku_data' => $kapalData->toArray()]);

    // Ambil data jenis kapal
    $jenisKapalList = RefJenisKapal::all();

    return view('Kapalku', [
        'kapalData' => session('kapalku_data'),
        'jenisKapalList' => $jenisKapalList
    ]);
}



    public function edit($id)
    {
        $kapal = Kapal::findOrFail($id);
        $jenisKapalList = RefJenisKapal::all(); // ambil data jenis kapal
        return view('Admin.Kapalku.create', compact('kapal', 'jenisKapalList'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            "nama_kapal" => 'required|string|max:255',
            "id_jenis_kapal" => 'required|exists:ref_jenis_kapal,id',
            "ukuran" => 'required|regex:/^\d+(\.\d+)?m$/',
        ]);

        $kapal = Kapal::findOrFail($id);
        $kapal->update([
            'nama_kapal' => $request->nama_kapal,
            'id_jenis_kapal' => $request->id_jenis_kapal,
            'ukuran' => $request->ukuran,
        ]);

        return redirect()->route('Admin.Kapalku.create')->with('success', 'Data kapal berhasil diupdate.');
    }

    public function create()
    {
        $jenisKapalList = RefJenisKapal::all();
        return view('Admin.Kapalku.create', compact('jenisKapalList'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "nama_kapal" => 'required|string|max:255',
            "id_jenis_kapal" => 'required|exists:ref_jenis_kapal,id',
            "ukuran" => 'required|regex:/^\d+(\.\d+)?m$/',
        ]);

        Kapal::create([
            'nama_kapal' => $request->nama_kapal,
            'id_jenis_kapal' => $request->id_jenis_kapal,
            'ukuran' => $request->ukuran,
            'id_user' => Auth::id(),
            'created_id' => Auth::id(),
            'updated_id' => Auth::id(),
        ]);

        return redirect()->route('Admin.Kapalku.create')->with('success', 'Data kapal berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $kapal = Kapal::findOrFail($id);

        $kapal->delete();

        return redirect()->route('Kapalku.index')->with('success', 'Data kapal berhasil dihapus.');
    }
}