<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BarrangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barrangs = [
            ['nama' => 'barang 1', 'jumlah' => 10],
            ['nama' => 'barang 2', 'jumlah' => 20],
            ['nama' => 'barang 3', 'jumlah' => 30]
        ];

        //masukkan data ke database
        DB::table('barrangs')->insert($barrangs);
    }
}
