<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categories::create([
            'namaKategori' => 'Romansa',
        ]);

        Categories::create([
            'namaKategori' => 'Sejarah',
        ]);
        
        Categories::create([
            'namaKategori' => 'Petualangan',
        ]);

        Categories::create([
            'namaKategori' => 'Sejarah',
        ]);

        Categories::create([
            'namaKategori' => 'Drama',
        ]);

        Categories::create([
            'namaKategori' => 'Misteri',
        ]);

        Categories::create([
            'namaKategori' => 'Thriller',
        ]);

        Categories::create([
            'namaKategori' => 'Kriminal',
        ]);

        Categories::create([
            'namaKategori' => 'Fiksi Ilmiah',
        ]);

        Categories::create([
            'namaKategori' => 'Fantasy',
        ]);

        Categories::create([
            'namaKategori' => 'Horror',
        ]);

        Categories::create([
            'namaKategori' => 'Misteri',
        ]);
    }
}
