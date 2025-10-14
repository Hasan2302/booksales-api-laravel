<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author')->get();
        return view('library.index', compact('books'));
    }

    public function authors()
    {
        $authors = Author::all();
        return view('library.authors', compact('authors'));
    }
}
