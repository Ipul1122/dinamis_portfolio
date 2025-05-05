<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Home;

class HomeContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Home::create([
            'nama' => 'Masukkan Nama Anda',
            'jurusan' => 'Masukkan Jurusan Anda',
            'paragraph' => 'Masukkan Deskripsi Anda',
            'image' => '', // Pastikan file ini ada atau handle secara default di view
        ]);
    }
}
