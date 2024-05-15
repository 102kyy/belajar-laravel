<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = [
            ['jumlah' => 10, 'tanggal' => '2023-05-13', 'nama_pembeli' => 'Bilal', 'nama_baranglagi' => 'barang 1'],
            ['jumlah' => 11, 'tanggal' => '2023-05-14', 'nama_pembeli' => 'Ramadhan', 'nama_baranglagi' => 'barang 2'],
            ['jumlah' => 12, 'tanggal' => '2023-05-15', 'nama_pembeli' => 'Ajie', 'nama_baranglagi' => 'barang 3'],
          
        ];

        // Masukkan data ke database
        DB::table('transaksis')->insert($transaksis);
    }
}
