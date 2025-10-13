<?php

namespace App\Models;

class Author
{
    public static $authors = [
        ['id' => 1, 'name' => 'J.K. Rowling'],
        ['id' => 2, 'name' => 'George R.R. Martin'],
        ['id' => 3, 'name' => 'Agatha Christie'],
        ['id' => 4, 'name' => 'Isaac Asimov'],
        ['id' => 5, 'name' => 'J.R.R. Tolkien'],
    ];

    public static function all()
    {
        return self::$authors;
    }
}
