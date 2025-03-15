<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index()
    {
        $publisher = Publisher::all();

        return view('home.publisher.index', compact('publisher'));
    }

    public function create()
    {
        return view('home.publisher.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'address' => 'required|',
            'contact' => 'required|',
         ]);

        Publisher::create([
            'name' => $request->name,
            'address' => $request->address,
            'contact' => $request->contact,
        ]);

        return redirect('/publisher')->with('success', 'Data berhasil ditambah');
    }

    public function edit(string $id)
    {
        $publisher = Publisher::find($id);

        return view('home.publisher.edit', compact('publisher'));
    }

    public function update(Request $request, string $id)
    {
        $publisher = Publisher::find($id);

        $request->validate([
            'name' => 'required|min:3',
            'address' => 'required|',
            'contact' => 'required|',
         ]);

        $publisher->update([
            'name' => $request->name,
            'address' => $request->address,
            'contact' => $request->contact,
        ]);

        return redirect('/publisher')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $publisher = Publisher::find($id);

        $publisher->delete();
        return redirect('/publisher')->with('success', 'Data berhasil dihapus');
    }
}
