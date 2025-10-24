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

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'genre_id' => 'required|integer|exists:genres,id',
                'price' => 'required|numeric|min:0',
                'stock' => 'required|integer|min:0',
                'author_id' => 'required|integer|exists:authors,id',
            ]);

            $book = Book::create($validated);

            $book->load('author');

            return response()->json($book, 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to create book',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function authors()
    {
        $authors = Author::all();
        return response()->json($authors);
    }
}
