<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWajibRetribusiToWajibRetribusiTable extends Migration
{
    public function up()
    {
        Schema::table('wajib_retribusi', function (Blueprint $table) {
            $table->string('wajib_retribusi')->nullable()->unique()->change(); // Menambahkan kolom
        });
    }

    public function down()
    {
        Schema::table('wajib_retribusi', function (Blueprint $table) {
            $table->dropColumn('wajib_retribusi'); // Menghapus kolom jika rollback
        });
    }
};
