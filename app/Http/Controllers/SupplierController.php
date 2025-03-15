<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $supplier = Supplier::all();

        return view('home.supplier.index', compact('supplier'));
    }

    public function create()
    {
        return view('home.supplier.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'address' => 'required|',
            'contact' => 'required|',
         ]);

        Supplier::create([
            'name' => $request->name,
            'address' => $request->address,
            'contact' => $request->contact,
        ]);

        return redirect('/supplier')->with('success', 'Data berhasil ditambah');
    }

    public function edit(string $id)
    {
        $supplier = Supplier::find($id);

        return view('home.supplier.edit', compact('supplier'));
    }

    public function update(Request $request, string $id)
    {
        $supplier = Supplier::find($id);

        $request->validate([
            'name' => 'required|min:3',
            'address' => 'required|',
            'contact' => 'required|',
         ]);

        $supplier->update([
            'name' => $request->name,
            'address' => $request->address,
            'contact' => $request->contact,
        ]);

        return redirect('/supplier')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $supplier = Supplier::find($id);

        $supplier->delete();
        return redirect('/supplier')->with('success', 'Data berhasil dihapus');
    }
}
