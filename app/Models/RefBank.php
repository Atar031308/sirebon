<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefBank extends Model
{
    use HasFactory;
    protected $table = 'ref_bank';
    protected $fillable = ['nama_bank'];

    public function MsRekening(){
        return $this->hasOne(MsRekening::class, 'id_ref_bank');
    }

    
}
