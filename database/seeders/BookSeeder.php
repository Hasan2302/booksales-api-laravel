<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'The Hobbit',
            'author_id' => 1,
            'genre_id' => 1,
            'description' => 'A classic fantasy adventure by J.R.R. Tolkien',
            'price' => 250000,
            'stock' => 10
        ]);

        Book::create([
            'title' => 'Dune',
            'author_id' => 2,
            'genre_id' => 2,
            'description' => 'Epic science fiction novel by Frank Herbert',
            'price' => 50000,
            'stock' => 5
        ]);
    }
}
