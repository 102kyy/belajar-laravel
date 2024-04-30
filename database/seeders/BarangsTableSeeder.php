<?php

namespace Database\Seeders;

use Illuminate\Database\Seeders;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama' => 'barang 1', 'jumlah' => 10],
            ['nama' => 'barang 2', 'jumlah' => 20],
            ['nama' => 'barang 3', 'jumlah' => 30]
        ];

        //masukkan data ke database
        DB::table('barangs')->insert($barangs);
    }
}
