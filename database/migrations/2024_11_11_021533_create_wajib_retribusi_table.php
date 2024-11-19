<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('wajib_retribusi', function (Blueprint $table) {
            $table->id(); // id sebagai primary key dan auto_increment
            $table->unsignedBigInteger('id_user'); // kolom id_user sebagai foreign key
            $table->string('nama', 50); // nama dengan panjang maksimal 50 karakter
            $table->string('no_hp', 16); // no_hp dengan panjang maksimal 16 karakter
            $table->string('nik', 16); // nik dengan panjang maksimal 16 karakter
            $table->text('alamat'); // alamat dalam bentuk teks
            $table->unsignedBigInteger('id_kelurahan');
            $table->timestamps();

            // Definisikan foreign key ke tabel users
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('id_kelurahan')->references('id')->on('kelurahan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wajib_retribusi');
    }
};
