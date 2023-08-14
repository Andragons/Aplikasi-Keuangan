<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function index()
    {
        return view('transaksi', [
            "title" => "Transaksi",
            "slug" => "List",
            "transactions" => Transaction::whereMonth('created_at', now()->month)->get()
        ]);
    }

    public function add()
    {
        return view('transaksi', [
            "title" => "Transaksi",
            "slug" => "Tambah"
        ]);
    }
}
