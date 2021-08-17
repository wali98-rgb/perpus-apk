@extends('layout.main')

@section('title', 'Laravel - SI Perpustakaan')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1 class="display-6">Tambah Data Anggota</h1>
        <hr class="my-4">
        <form action="/anggota" method="POST">
        @csrf
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Anggota" value="{{old('alamat')}}">
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Alamat Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" value="{{old('email')}}" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="no_telp">No. Hp</label>
            <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="NO. HP" value="{{old('no_telp')}}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection