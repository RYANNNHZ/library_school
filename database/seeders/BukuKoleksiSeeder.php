<?php

namespace Database\Seeders;

use App\Models\buku_koleksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuKoleksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        buku_koleksi::insert([
            [
                'user_id' => 4,
                'buku_id' => 1
            ],
            [
                'user_id' => 4,
                'buku_id' => 2
            ],
            [
                'user_id' => 4,
                'buku_id' => 3
            ],
            [
                'user_id' => 3,
                'buku_id' => 3
            ],
        ]);
    }
}
