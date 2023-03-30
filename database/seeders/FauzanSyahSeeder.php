<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FauzanSyahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fauzan_syahs')->INSERT([
            'nama' => 'FauzanSyah',
            'jeniskelamin' => 'Pria',
            'notelpon' => '029817318230',
        ]);
    }
}
