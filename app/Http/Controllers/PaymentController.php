<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payment = Payment::all();

        return view('home.payment.index', compact('payment'));
    }

    public function create()
    {
        return view('home.payment.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
         ]);

        Payment::create([
            'name' => $request->name,
        ]);

        return redirect('/payment')->with('success', 'Data berhasil ditambah');
    }

    public function edit(string $id)
    {
        $payment = Payment::find($id);

        return view('home.payment.edit', compact('payment'));
    }

    public function update(Request $request, string $id)
    {
        $payment = Payment::find($id);

        $request->validate([
            'name' => 'required|min:3',
         ]);

        $payment->update([
            'name' => $request->name,
        ]);

        return redirect('/payment')->with('success', 'Data berhasil diedit');
    }
}
