<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kapal extends Model
{
    use HasFactory;

    protected $table = 'kapal';
    protected $fillable = ['id_user', 'id_wajib_retribusi', 'nama_pemilik', 'nama_kapal', 'id_jenis_kapal', 'ukuran', 'tgl_bayar'];



    public function jenisKapal()
    {
        return $this->belongsTo(RefJenisKapal::class, 'id_jenis_kapal');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function wajibRetribusi()
{
    return $this->belongsTo(Wajib_retribusi::class, 'id_wajib_retribusi');
}

}