<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $pembelis = [
    ['nama_pembeli' => 'Bilal', 'kelamin' => 'cowo'],
    ['nama_pembeli' => 'Ramadhan', 'kelamin' => 'cowo'],
    ['nama_pembeli' => 'Ajie', 'kelamin' => 'cowo'],

];

// Masukkan data ke database
DB::table('pembelis')->insert($pembelis);

 
    }
}
