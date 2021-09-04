@extends('layout.main')

@section('title', 'Laravel - SI Perpustakaan')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1 class="display-6">Edit Data Anggota</h1>
        <hr class="my-4">
        <form action="/anggota/{$anggota->id_anggota}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="nama_anggota">Nama Anggota</label>
            <input type="text" name="nama_anggota" class="form-control" id="nama_anggota" value="{{$anggota->nama_anggota}}">
            @error('nama_anggota')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" value="{{$anggota->alamat}}">
            @error('alamat')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ $anggota->jenis_kelamin }}">
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
            @error('jenis_kelamin')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Alamat Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ url($anggota->email) }}">
            @error('email')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="no_telp">No. HP</label>
            <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ url($anggota->no_telp) }}">
            @error('no_telp')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>    
</div>

@endsection