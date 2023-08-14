@extends('layouts.main')

@section('container')
    <div class="mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Update Transaksi</h1>
                
                <form action="/transaksi/update/{{ $transaction->id }}" method="post">
                    @csrf
                    @method('put')
                    
                    <div class="mb-3">
                        <label for="transaction_type" class="form-label">Jenis Transaksi</label>
                        <input type="text" class="form-control" id="transaction_type" name="transaction_type" value="{{ $transaction->transaction_type }}">
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="text" class="form-control" id="amount" amount="amount" value="{{ $transaction->amount }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description">{{ $transaction->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
