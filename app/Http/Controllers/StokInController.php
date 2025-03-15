<?php

namespace App\Http\Controllers;

use App\Models\StokIn;
use App\Models\Supplier;
use App\Models\Book;
use Illuminate\Http\Request;

class StokInController extends Controller
{
    public function index()
    {
        $stokIn = StokIn::all();
        $supplier = Supplier::all();
        $book = Book::all();

        return view('home.stokIn.index', compact('stokIn', 'supplier', 'book'));
    }

    public function create()
    {
        $supplier = Supplier::all();
        $book = Book::all();

        return view('home.stokIn.add', compact('supplier', 'book'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'supplier_id' => 'required|',
            'book_id' => 'required|',
            'amount' => 'required|',
         ]);

        StokIn::create([
            'supplier_id' => $request->supplier_id,
            'book_id' => $request->book_id,
            'amount' => $request->amount,
        ]);

        $book = Book::find($request->book_id);

        $book->increment('stock', $request->amount);

        return redirect('/book')->with('success', 'Data berhasil ditambah');
    }

    public function print(){
        $stokIn = StokIn::all();

        return view('home.stokIn.print', compact('stokIn'));
    }
}
