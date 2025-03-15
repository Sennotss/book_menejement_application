<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Transaction;
use App\Models\Book;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    
    public function index($id)
    {
        $transaction = Transaction::find($id);
        $detail = Detail::where('transaction_id', $id)->get();
        $book = Book::all();
        $cost = $detail->sum('subtotal');

        return view('home.transaction.detail', compact('transaction', 'detail', 'book', 'cost'));
    }

    public function store(Request $request, String $id)
    {
        // dd($request->all());

        $inputBook = $request->input('book_id');

        $bookAdd = Book::where('id', $inputBook)->first();

        if($bookAdd){
            $amount = $request->input('amount');
            $price = $bookAdd->price;

            $detail = Detail::where('transaction_id', $request->id)->where('book_id', $bookAdd->id)->first();

            if($detail){
                $detail->increment('amount', $amount);
                $detail->subtotal = $detail->amount * $price;
                $detail->save();
            } else {
                Detail::create([
                    'transaction_id' => $request->id,
                    'book_id' => $bookAdd->id,
                    'amount' => $amount,
                    'subtotal' => $amount * $price,
                ]);
                
            }

            $bookAdd->decrement('stock', $amount);

            return redirect()->back();
        }

        return redirect()->back(); 
    }
   
    public function destroy(Detail $detail, String $id)
    {
        $detail = Detail::find($id);

        $detail->delete();

        return redirect()->back();
    }
}
