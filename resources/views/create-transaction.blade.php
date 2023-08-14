@extends('layouts.main')

@section('container')
    <div class="mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Tambah Transaksi</h1>
                
                <form action="/transaksi/create" method="post">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis Transaksi</label>
                        <input type="text" class="form-control" id="jenis" name="jenis">
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Nominal</label>
                        <textarea class="form-control" id="amount" name="amount"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
@endsection
