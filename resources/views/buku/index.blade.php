@extends('layout.main')

@section('title', 'Laravel - SI Perpustakaan')

@section('content')
    <div class="container">
        <div class="jumbotron">
            @if(session('msg'))
                <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                    {{session('msg')}}

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <h1 class="display-6">Data Buku</h1>
            <hr class="my-4">

            <a href="buku/create" class="btn btn-primary mb-1">Tambah Buku</a>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Deskripsi Buku</th>
                    <th scope="col">Kategori Buku</th>
                    <th scope="col">Cover Buku</th>
                    <th scope="col" colspan="2">Action</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($buku as $buku)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $buku->judul_buku }}</td>
                        <td>{{ $buku->deskripsi }}</td>
                        <td>{{ $buku->kategori }}</td>
                        <td><img src='image/{{ $buku->cover_img }}' style='width:80px; height:50px;'></td>
                        <td>
                            <a href="{{'buku/'.$buku->id_buku.'/edit'}}" class="badge badge-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ 'buku/'.$buku->id_buku }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" type="submit">Hapus</button>
                            </form>
                            <!-- <a href="buku/destroy/{{ $buku->id_buku }}" class="badge badge-danger">Hapus</a> -->
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
