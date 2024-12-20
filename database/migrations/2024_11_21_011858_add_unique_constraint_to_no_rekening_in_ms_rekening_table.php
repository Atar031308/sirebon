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
        Schema::table('ms_rekening', function (Blueprint $table) {
            // Hapus jika sudah ada indeks dengan nama yang sama
            $table->dropUnique('ms_rekening_no_rekening_unique');  // Hapus jika sudah ada
        
            // Tambahkan unique constraint
            $table->unique('no_rekening', 'ms_rekening_no_rekening_unique');
        });
        
    }
};
