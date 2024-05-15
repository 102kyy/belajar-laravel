<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BaranglagisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $baranglagis = [
            ['nama_baranglagi' => 'barang 1', 'harga' => 1000000, 'stok' => 10 ],
            ['nama_baranglagi' => 'barang 2', 'harga' => 2000000, 'stok' => 20 ],
            ['nama_baranglagi' => 'barang 3', 'harga' => 3000000, 'stok' => 30 ]
        ];

        //masukkan data ke database
        DB::table('baranglagis')->insert($baranglagis);
    }
}
