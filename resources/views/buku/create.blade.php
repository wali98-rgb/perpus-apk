@extends('layout.main')

@section('title', 'Laravel - SI Perpustakaan')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1 class="display-6">Tambah Data Buku</h1>
        <hr class="my-4">
        <form action="/buku" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="judul_buku">Judul Buku</label>
            <input type="text" class="form-control" name="judul_buku" placeholder="Judul Buku" value="{{old('judul_buku')}}">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi Buku</label>
            <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Buku" value="{{old('deskripsi')}}">
        </div>
        <div class="form-group">
            <label for="kategori">Kategori Buku</label>
            <select name="kategori" id="kategori" class="form-control">
                @foreach ($kategori as $kat)
                <option value="{{$kat->kategori}}">{{$kat->deskripsi}}</option>
                @foreach
            </select>
        </div>
        <div class="form-group">
            <label for="cover_img">Cover Buku</label>
            <input type="file" name="cover_img">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection