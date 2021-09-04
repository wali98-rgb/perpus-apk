@extends('layout.main')

@section('title', 'Laravel - SI Perpustakaan')

@section('content')
<div class="container">
    <div class="jumbotron">
        @if(session('msg'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            {{session('msg')}}
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <h1 class="display-6">Data Anggota</h1>
        <hr class="my-4">
        <a href="anggota/create" class="btn btn-primary mb-1">Tambah Anggota</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Email</th>
                    <th scope="col">No.Hp</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anggota as $ang)
                <tr>
                    <td> {{$loop->iteration}} </td>
                    <td> {{$ang->nama_anggota}} </td>
                    <td> {{$ang->alamat}} </td>
                    <td> {{$ang->jenis_kelamin}} </td>
                    <td> {{$ang->email}} </td>
                    <td> {{$ang->no_telp}} </td>
                    <td>
                        <a href="{{ url('anggota/'.$ang->id_anggota.'/edit') }}" class="badge badge-primary">Edit</a>
                        <form action="{{ url('anggota/'.$ang->id_anggota) }}" method="POST">
                        @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <!-- <input type="submit" class="btn btn-danger" value="Hapus"> -->
                            <button type="submit" class="btn btn-danger">Hapus</button>
                            <!-- <a href="{{ url('anggota/'.$ang->id_anggota.'/destroy') }}" class="badge badge-danger">Hapus</a> -->
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection