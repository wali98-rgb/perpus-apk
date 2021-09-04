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
        <h1 class="display-6">Kategori Buku</h1>
        <hr class="my-4">
        <a href="kategori/create" class="btn btn-primary mb-1">Tambah Kategori Buku</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Action</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategori as $kat)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$kat->deskripsi}}</td>
                    <td>
                        <a href="{{ url('kategori/'.$kat->kategori.'/edit') }}" class="badge badge-primary">Edit</a>
                        <form action="{{ url('kategori/'.$kat->kategori) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" type="submit">DELETE</button>
                        </form>
                        <!-- <a href="" class="badge badge-danger">Hapus</a> -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection