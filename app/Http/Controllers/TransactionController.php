<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Models\Payment;
use App\Models\Detail;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transaction = Transaction::all();
        $user = User::all();
        $payment = Payment::all();

        return view('home.transaction.index', compact('transaction', 'user', 'payment'));
    }

    public function create()
    {
        $user = User::where('level', 'Cashier')->where('status', 'Active')->get();
        $payment = Payment::all();

        return view('home.transaction.add', compact('user', 'payment'));
    }

    public function store(Request $request)
    {
        Transaction::create([
            'user_id' => $request->user_id,
            'customer' => $request->customer,
            'total' => $request->total,
            'payment_id' => $request->payment_id,
            'status' => 'Pending',
            'amount_paid' => '0',
            'discount' => '0',
            'change' => '0',
        ]);

        return redirect('/transaction')->with('success', 'Data berhasil ditambah');
    }

    public function cetak(String $id){
        $transaction = Transaction::find($id);

        return view('home.transaction.struk', compact('transaction'));
    }

    public function update(Request $request, string $id)
    {
        $transaction = Transaction::find($id);
        $detail = Detail::where('transaction_id', $id);
        $amount_paid = $request->input('amount_paid');
        $discount = $request->input('discount');

        $total = $detail->sum('subtotal');

        $totalDiscount = ($discount / 100) * $total;

        $totalAfterDiscount = $total - $totalDiscount;

        $change = $amount_paid - $totalAfterDiscount;

        $transaction->update([
            'total' => $totalAfterDiscount,
            'amount_paid' => $amount_paid,
            'discount' => $discount,
            'change' => $change,
            'status' => 'Completed',
        ]);

        return redirect('/transaction');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaction = Transaction::find($id);

        $transaction->delete();
        return redirect('/transaction')->with('success', 'Data berhasil dihapus');
    }

    public function struk($id){
        $transaction = Transaction::with('detail.book')->find($id);
        $detail = Detail::where('transaction_id', $id);

        $subtotal = $detail->sum('subtotal');

        $discount = $transaction->discount;

        $totalDiscount = ($discount / 100) * $subtotal;

        $totalAfterDiscount = $subtotal - $totalDiscount;

        return view('home.transaction.struk', compact('transaction','subtotal', 'totalAfterDiscount', 'discount'));
    }

    public function laporan(){
        $transaction = Transaction::all();
        $user = User::all();
        $payment = Payment::all();

        return view('home.transaction.laporan', compact('transaction', 'user', 'payment'));
    }
}
