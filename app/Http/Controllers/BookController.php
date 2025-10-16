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
        return response()->json($books);
    }

    public function authors()
    {
        $authors = Author::all();
        return response()->json($authors);
    }
}
