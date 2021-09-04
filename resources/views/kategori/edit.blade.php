@extends('layout.main')

@section('title', 'Laravel - SI Perpustakaan')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1 class="display-6">Kategori Buku</h1>
        <hr class="my-4">
        <form action="{{ url('kategori/'.$kategori->kategori) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="deskripsi">Kategori</label>
            <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="{{url('$kategori->deskripsi')}}">
            @error('deskripsi')
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