<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    // Read all data for the Genre table
    public function index()
    {
        $genres = Genre::all();
        return response()->json($genres);
    }

    // Create data for the Genre table
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre = Genre::create($validated);
        return response()->json($genre, 201);
    }
}
