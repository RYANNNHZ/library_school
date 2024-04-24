<?php

namespace Database\Seeders;

use App\Models\buku;
use App\Models\buku_kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        // for ($i = 0; $i < 10; $i++) {
        //     DB::table('bukus')->insert([
        //         'judul' => $faker->sentence(1),
        //         'penulis' => $faker->name,
        //         'penerbit' => $faker->name,
        //         'tahun_terbit' => date('Y-m-d H:i:s')
        //     ]);
        // }


        // for ($i=0; $i < 25; $i++) {
        //     DB::table('bukus')->insert([
        //         'judul' => $faker->sentence(1),
        //         'penuluis' => $faker->name,
        //         'penerbit' => $faker->name,
        //         'tahun_terbit' => date('Y-m-d H:i:s')
        //     ]);
        // }


    }
}
