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

    public function create(Request $request)
    {
        $transaction = new Transaction();
        $transaction->name = $request->input('transaction_type');
        $transaction->amount = $request->input('amount');
        $transaction->description = $request->input('description');
        $transaction->save();
    
        return redirect('/transaksi/list')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    public function showCreateForm()
    {
        return view('create-transaction', [
            'title' => "Tambah Data"
        ]);
    }

    public function showUpdateForm($id)
    {
        $transaction = Transaction::find($id);
        return view('update-transaction', [
            'transaction' => $transaction,
            'title' => "Update"
        ]);
    }

    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);
        $transaction->transaction_type = $request->input('transaction_type');
        $transaction->amount = $request->input('amount');
        $transaction->description = $request->input('description');
        $transaction->save();

        return redirect('/transaksi/list')->with('success', 'List berhasil diupdate.');
    }

    public function delete($id)
    {
        $transaction = Transaction::find($id);
        $transaction->delete();

        return redirect('/transaksi/pemasukan')->with('success', 'List berhasil dihapus.');
    }
}
