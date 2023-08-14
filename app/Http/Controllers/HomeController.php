<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => "Home",
            'currentBalance' => Transaction::sum('amount'),
            'totalPengeluaran' => Transaction::where('transaction_type', 'Pengeluaran')->sum('amount'),
            'totalPemasukan' => Transaction::where('transaction_type', 'Pemasukan')->sum('amount'),
            'datas' => Transaction::all()
        ]);
    }
}
