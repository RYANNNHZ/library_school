<?php

namespace Database\Seeders;

use App\Models\kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // kategori::create([
        //     'nama_kategori' => 'fiksi'
        // ]);
        // kategori::create([
        //     'nama_kategori' => 'nonfiksi'
        // ]);
        // kategori::create([
        //     'nama_kategori' => 'romance'
        // ]);
        // kategori::create([
        //     'nama_kategori' => 'kamus'
        // ]);

        kategori::insert([
            ['nama_kategori' => 'fiksi'],
            ['nama_kategori' => 'nonfiksi'],
            ['nama_kategori' => 'sci-fi'],
            ['nama_kategori' => 'romance'],
            ['nama_kategori' => 'fantasy'],
            ['nama_kategori' => 'horor'],
            ['nama_kategori' => 'misteri'],
            ['nama_kategori' => 'komedi'],
            ['nama_kategori' => 'self improvement'],
        ]);
    }
}
