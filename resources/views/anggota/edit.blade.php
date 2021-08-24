@extends('layout.main')

@section('title', 'Laravel - SI Perpustakaan')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1 class="display-6">Edit Data Anggota</h1>
        <hr class="my-4">
        <form action="/anggota/{$anggota->id}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_anggota"></label>
            <input type="text" name="nama_anggota" class="form-control" id="nama_anggota" value="{{$anggota->nama_anggota}}">
            @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        </form>
    </div>    
</div>

@endsection