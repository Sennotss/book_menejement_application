<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genre = Genre::all();

        return view('home.genre.index', compact('genre'));
    }

    public function create()
    {
        return view('home.genre.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
         ]);

        Genre::create([
            'name' => $request->name,
        ]);

        return redirect('/genre')->with('success', 'Data berhasil ditambah');
    }

    public function edit(string $id)
    {
        $genre = Genre::find($id);

        return view('home.genre.edit', compact('genre'));
    }

    public function update(Request $request, string $id)
    {
        $genre = Genre::find($id);

        $request->validate([
            'name' => 'required|min:3',
         ]);

        $genre->update([
            'name' => $request->name,
        ]);

        return redirect('/genre')->with('success', 'Data berhasil diedit');
    }
}
