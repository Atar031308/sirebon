<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Wajib_retribusi;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(){
        $Wajib_retribusi = Wajib_retribusi::where('id_user',auth()->user()->id)->get();
        return view('Profile');
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

        $Wajib_retribusi = $user->Wajib_retribusi;

        foreach ($Wajib_retribusi as $wajib) {
            $wajib->nik = $request->input('nik');
            $wajib->nama = $request->input('namaLengkap');
            $wajib->no_hp = $request->input('telepon');
            $wajib->alamat = $request->input('alamat');
            $wajib->save();
        }

        return redirect()->route('Profile.index')->with('success', 'Profil berhasil diperbarui!');
}

public function updatePassword(Request $request)
{
    $request->validate([
        'passwordLama' => 'required|string',
        'passwordBaru' => 'required|string|min:8|confirmed', // 'confirmed' memeriksa passwordBaru dan passwordBaru_confirmation
    ]);

    $user = Auth::user();

    // Periksa apakah password lama sesuai
    if (!\Hash::check($request->input('passwordLama'), $user->password)) {
        return redirect()->back()->withErrors(['passwordLama' => 'Password lama tidak sesuai.']);
    }

    // Simpan password baru
    $user->password = \Hash::make($request->input('passwordBaru'));
    $user->save();

    return redirect()->route('Profile.index')->with('success', 'Password berhasil diubah!');
}


}
