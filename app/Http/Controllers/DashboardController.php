<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Transaction;
use App\Models\User;
use App\Models\StokIn;

class DashboardController extends Controller
{
    public function index(){
        $transaction = Transaction::sum('total');
        $transaction_jumlah = Transaction::count();
        $book = Book::count();
        $user = User::count();
        $stokIn = StokIn::count();

        return view('home.dashboard', compact('transaction', 'transaction_jumlah', 'book', 'user', 'stokIn'));
    }
}
