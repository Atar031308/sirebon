<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_banks')->insert([
            ['nama_bank' => 'Bank BRI'],
            ['nama_bank' => 'Bank BCA'],
            ['nama_bank' => 'Bank Mandiri'],
        ]);
    }
}
