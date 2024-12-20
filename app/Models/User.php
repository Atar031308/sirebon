<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];



    // Pastikan relasi tetap benar
    public function Wajib_retribusi()
    {
        return $this->hasMany(Wajib_retribusi::class, 'id_user', 'id');
    }

    public function konfirmasi()
    {
        return $this->hasOne(KonfirmasiBayar::class, 'id_user', 'id');
    }
}
