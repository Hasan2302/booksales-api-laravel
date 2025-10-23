<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        Genre::create(['name' => 'Fantasy']);
        Genre::create(['name' => 'Science Fiction']);
        Genre::create(['name' => 'Romance']);
    }
}
