<?php

namespace Database\Seeders;

use App\Models\buku;
use App\Models\buku_kategori;
use App\Models\kategori;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $faker = Faker::create('id_id');

        User::create([
            'username' => 'admin',
            'nama_lengkap' => 'adrian hamzah',
            'role' => 'administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123')
        ]);
        User::create([
            'username' => 'keidjaru',
            'nama_lengkap' => 'keidjaru axiro',
            'role' => 'petugas',
            'email' => 'keiAxiro@gmail.com',
            'password' => Hash::make('petugas123')
        ]);



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


        $buku1 = buku::create([
            'judul' => $faker->sentence(1),
            'penulis' => $faker->name,
            'penerbit' => $faker->name,
            'tahun_terbit' => date('Y-m-d H:i:s')
        ]);

        buku_kategori::insert([
            [
                'buku_id' => $buku1->id,
                'kategori_id' => 5
            ],[
                'buku_id' => $buku1->id,
                'kategori_id' => 2
            ]
        ]);
        $buku2 = buku::create([
            'judul' => $faker->sentence(1),
            'penulis' => $faker->name,
            'penerbit' => $faker->name,
            'tahun_terbit' => date('Y-m-d H:i:s')
        ]);

        buku_kategori::insert([
            [
                'buku_id' => $buku2->id,
                'kategori_id' => 1
            ],[
                'buku_id' => $buku2->id,
                'kategori_id' => 3
            ]
        ]);
        $buku3 = buku::create([
            'judul' => $faker->sentence(1),
            'penulis' => $faker->name,
            'penerbit' => $faker->name,
            'tahun_terbit' => date('Y-m-d H:i:s')
        ]);

        buku_kategori::insert([
            [
                'buku_id' => $buku3->id,
                'kategori_id' => 7
            ],
            [
                'buku_id' => $buku3->id,
                'kategori_id' => 8
            ],
            [
                'buku_id' => $buku3->id,
                'kategori_id' => 9
            ],
        ]);
    }
}
