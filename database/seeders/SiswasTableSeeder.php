<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswas = [
            ['nama' => 'kiara', 'jenis kelamin' => 'perempuan', 'alamat' => 'rancamanyar', 'agama' => 'islam', 'telepon' => '98785', 'email' => 'kiara@gmail.com'],
            ['nama' => 'danisha', 'jenis kelamin' => 'perempuan', 'alamat' => 'rancamanyar', 'agama' => 'islam', 'telepon' => '98785', 'email' => 'danish@gmail.com'],
            ['nama' => 'laksmi', 'jenis kelamin' => 'perempuan', 'alamat' => 'rancamanyar', 'agama' => 'islam', 'telepon' => '98255', 'email' => 'laksmi@gmail.com'],
            ['nama' => 'bilal', 'jenis kelamin' => 'lakilaki', 'alamat' => 'rancamanyar', 'agama' => 'islam', 'telepon' => '63385', 'email' => 'bilal@gmail.com'],
            ['nama' => 'ramadhan', 'jenis kelamin' => 'lakilaki', 'alamat' => 'rancamanyar', 'agama' => 'islam', 'telepon' => '9875', 'email' => 'ramadhan@gmail.com'],
            ['nama' => 'ajie', 'jenis kelamin' => 'lakilaki', 'alamat' => 'rancamanyar', 'agama' => 'islam', 'telepon' => '98789', 'email' => 'ajie@gmail.com'],
            ['nama' => 'nadya', 'jenis kelamin' => 'perempuan', 'alamat' => 'rancamanyar', 'agama' => 'islam', 'telepon' => '9884', 'email' => 'nadya@gmail.com'],
            ['nama' => 'shaliha', 'jenis kelamin' => 'perempuan', 'alamat' => 'rancamanyar', 'agama' => 'islam', 'telepon' => '9805', 'email' => 'shaliha@gmail.com'],
            ['nama' => 'bian', 'jenis kelamin' => 'lakilaki', 'alamat' => 'cicendo', 'agama' => 'islam', 'telepon' => '9785', 'email' => 'bian@gmail.com'],
            ['nama' => 'rere', 'jenis kelamin' => 'perempuan', 'alamat' => 'cicendo', 'agama' => 'islam', 'telepon' => '9479', 'email' => 'rere@gmail.com'],
        ];

        //masukkan data ke database
        DB::table('siswas')->insert($siswas);
    }
}
