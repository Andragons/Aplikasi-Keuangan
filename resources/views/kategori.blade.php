@extends('layouts.main')

@section('container')
    <div class="mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>List Kategori</h1>
                <a href="/kategori/pemasukan" class="me-3"><button type="button" class="btn btn-primary">Pemasukan</button></a>
                <a href="/kategori/pengeluaran"><button type="button" class="btn btn-primary">Pengeluaran</button></a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col" width="200px">Nama Kategori</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col" width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pemasukanCategories as $key => $category)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>
                                    <a href="/kategori/update/{{ $category->id }}" class="btn btn-warning badge rounded-pill">
                                        Update</a>
                                    <form action="/kategori/delete/{{ $category->id }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger badge rounded-pill">
                                            Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
