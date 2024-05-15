<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['nama_produk' => 'Ponsel', 'jumlah' => 1, 'tanggal_produksi' => '2023-05-13', 'id_merek' => 1],
            ['nama_produk' => 'Ponsel', 'jumlah' => 5, 'tanggal_produksi' => '2023-05-14', 'id_merek' => 2],
            ['nama_produk' => 'Ponsel', 'jumlah' => 9, 'tanggal_produksi' => '2023-05-15', 'id_merek' => 3],
        ];

        // Masukkan data ke database
        DB::table('produks')->insert($produks);
    }
}
