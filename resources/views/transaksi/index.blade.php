@extends('layout.main')

@section('title', 'Laravel - SI Perpustakaan')

@section('content')
<div class="container">
    <div class="jumbotron">
        @if(session('msg'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            {{session('msg')}}
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span ariap-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <h1 class="display-6">Data Peminjaman Buku</h1>
        <hr class="my-4">
        <a href="transaksi/create" class="btn btn-primary mb-1">Peminjaman Buku</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No. Peminjaman</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Deskripsi Buku</th>
                    <th scope="col">Kategori Buku</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $trans)
                <tr>
                    <td>{{$trans->id}}</td>
                    <td>{{$trans->judul_buku}}</td>
                    <td>{{$trans->deskripsi}}</td>
                    <td>{{$trans->kategori}}</td>
                    <td>{{$trans->tgl_pinjam}}</td>
                    <td>{{$trans->tgl_kembali}}</td>
                    <td>
                        @if($trans->tgl_kembali == null)
                        <a href="{{ 'transaksi/'.$trans->id.'/edit' }}}" class="badge badge-primary">Pengembalian</a>
                        @else
                        <p class="badge badge-seccuss">Dikembalikan</p>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection