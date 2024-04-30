<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title' => 'Tips Cepat Nikah', 'content' => 'Lorem Ipsum'],
            ['title' => 'Haruskah Menunda Nikah?', 'content' => 'Lorem Ipsum'],
            ['title' => 'Membangun Visi Misi Keluarga', 'content' => 'Lorem Ipsum'],
        ];

        //masukkan data ke database
        DB::table('posts')->insert($posts);
    }
}
