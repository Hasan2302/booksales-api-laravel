<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Author;
use App\Models\Book;

class LibraryController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        $authors = Author::all();
        $books = Book::with('author')->get();
        return view('library.index', compact('genres', 'authors', 'books'));
    }
}
