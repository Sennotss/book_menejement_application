<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::all();
        $category = Category::all();
        $genre = Genre::all();
        $publisher = Publisher::all();

        return view('home.book.index', compact('book', 'category', 'genre', 'publisher'));
    }

    public function create()
    {
        $category = Category::all();
        $genre = Genre::all();
        $publisher = Publisher::all();

        return view('home.book.add', compact('category', 'genre', 'publisher'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => '|required|min:3',
            'cover' => '|required|image|mimes:jpg,png,jpeg|max:2048',
            'description' => '|required|',
            'category_id' => '|required|numeric',
            'genre_id' => '|required|numeric',
            'author' => '|required|min:3',
            'publisher_id' => '|required|numeric',
            'publish' => '|required|date',
            'price' => '|required|numeric',
            'stock' => '|required|numeric',

        ]);

        $image = $request->file('cover');
        $image->storeAs('covers', $image->hashName(), 'public');

        Book::create([
            'title' => $request->title,
            'cover' => $image->hashName(),
            'description' => $request->description,
            'category_id' => $request->category_id,
            'genre_id' => $request->genre_id,
            'author' => $request->author,
            'publisher_id' => $request->publisher_id,
            'publish' => $request->publish,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect('/book')->with('success', 'Data berhasil ditambah');
    }

    public function edit(String $id){
        $book = Book::find($id);
        $category = Category::all();
        $genre = Genre::all();
        $publisher = Publisher::all();

        return view('home.book.edit', compact('book', 'category', 'genre', 'publisher'));
    }

    public function update(Request $request, String $id){
        $book = Book::find($id);

        $image = $request->file('cover');
        $image->storeAs('covers', $image->hashName(), 'public');
        $book->cover = $image->hashName();

        $book->update([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'genre_id' => $request->genre_id,
            'author' => $request->author,
            'publisher_id' => $request->publisher_id,
            'publish' => $request->publish,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);
        return redirect('/book');
    }

    public function detail(String $id){
        $book = Book::find($id);
        $category = Category::all();
        $genre = Genre::all();
        $publisher = Publisher::all();

        return view('home.book.detail', compact('book', 'category', 'genre', 'publisher'));
    }

    public function destroy(String $id)
    {
        $book = Book::find($id);

        $book->delete();
        return redirect('/book')->with('success', 'Data berhasil dihapus');
    }
}
