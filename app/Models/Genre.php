<?php

namespace App\Models;

class Genre
{
    public static $genres = [
        ['id' => 1, 'name' => 'Fiction'],
        ['id' => 2, 'name' => 'Non-Fiction'],
        ['id' => 3, 'name' => 'Mystery'],
        ['id' => 4, 'name' => 'Science Fiction'],
        ['id' => 5, 'name' => 'Fantasy'],
    ];

    public static function all()
    {
        return self::$genres;
    }
}
