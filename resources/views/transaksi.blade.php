@extends('layouts.main')

@section('container')
    <div class="mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $slug }} Transaksi</h1>


                <table class="table" celspacing>
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col" >Jenis Transaksi</th>
                        <th scope="col" width="200px">Nilai</th>
                        <th scope="col" width="150px">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $key => $trans)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $trans->transaction_type }}</td>
                                <td>Rp. {{ $trans->amount }}</td>
                                <td>
                                    <a href="/transaksi/update/{{ $trans->id }}" class="btn btn-warning badge rounded-pill">
                                        Update</a>
                                    <form action="/transaksi/delete/{{ $trans->id }}" method="post" class="d-inline">
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