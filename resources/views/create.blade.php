@extends('layouts.main')

@section('container')
    <div class="mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Tambah Kategori</h1>
                
                <form action="/kategori/create" method="post">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
@endsection
