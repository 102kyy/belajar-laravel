<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MereksTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('mereks')->insert([
            ['id' => 1, 'nama_merek' => 'Brand1'],
            ['id' => 2, 'nama_merek' => 'Brand2'],
            ['id' => 3, 'nama_merek' => 'Brand3'],
        ]);
    }
}
