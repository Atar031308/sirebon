<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $table = 'kelurahan';
    protected $fillable = ['nama_kelurahan'];

    public function Wajib_retribusi()
    {
        return $this->hasOne(Wajib_retribusi::class, 'id_kelurahan');
    }
}