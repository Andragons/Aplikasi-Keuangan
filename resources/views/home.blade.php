@extends('layouts.main')

@section('container')
    <div class="mt-5">
        <div class="row">
            <div class="col-md-8">
                <h1>Halaman Home</h1>

                <p>Saldo saat ini: {{ $currentBalance }}</p>
                <p>Total Pengeluaran (all time): {{ $totalPengeluaran }}</p>
                <p>Total Pemasukan (all time): {{ $totalPemasukan }}</p>

                
            </div>
        </div>
    </div>
@endsection