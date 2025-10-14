<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    public static $authors = [
        ['id' => 1, 'name' => 'J.K. Rowling'],
        ['id' => 2, 'name' => 'George R.R. Martin'],
        ['id' => 3, 'name' => 'Agatha Christie'],
        ['id' => 4, 'name' => 'Isaac Asimov'],
        ['id' => 5, 'name' => 'J.R.R. Tolkien'],
    ];

}
