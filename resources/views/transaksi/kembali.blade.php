@extends('layout.main')

@section('title', 'Laravel - SI Perpustakaan')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1 class="display-6">Pinjam Buku</h1>
        <hr class="my-4">
        <form action="{{action('TransaksiController@update', $pinjaman->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="type_transaksi">Type Transaksi</label>
            <select class="form-control" name="type_transaksi" id="type_transaksi">
                <option value="kembali">Kembali</option>
            </select>
        </div>

        <div class="form-group">
            <label for="id_buku">Kode Buku</label>
            <input class="form-control" type="text" name="id_buku" id="id_buku" value="{{$pinjaman->id_buku}}" readonly="true">
        </div>

        <div class="form-group">
            <label for="judul_buku">Judul Buku</label>
            <input class="form-control" type="text" name="judul_buku" id="judul_buku" value="{{$pinjaman->judul_buku}}" readonly="true">
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi Buku</label>
            <input class="form-control" type="text" name="deskripsi" id="deskripsi" value="{{$pinjaman->deskripsi}}" readonly="true">
        </div>

        <div class="form-group">
            <label for="kategori">Kategori Buku</label>
            <input class="form-control" type="text" name="kategori" id="kategori" value="{{$pinjaman->kategori}}" readonly="true">
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label for="tgl_pinjam">Tanggal Pinjam</label>
                    <input class="form-control" type="date" name="tgl_pinjam" id="tgl_pinjam" value="{{$pinjaman->tgl_pinjam}}" readonly="true">
                </div>

                <div class="col-sm-6">
                    <label for="tgl_kembali">Tanggal Kembali</label>
                    <input class="form-control" type="date" name="tgl_kembali" id="tgl_kembali">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="id_anggota">Id Anggota Peminjam</label>
            <input class="form-control" type="text" name="id_anggota" id="id_anggota" value="{{$pinjaman->id_anggota}}" readonly="true">
        </div>

        <div class="form-group">
            <label for="nama_angota">Nama Peminjam</label>
            <input class="form-control" type="text" name="nama_angota" id="nama_angota" value="{{$pinjaman->nama_angota}}" readonly="true">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
<script>
    $(function(){
        $('#id_buku').on('change', function(e){
            let id_buku = $('#id_buku').val();
            console.log(id_buku);

            let url = $(this).data('url')+'/transaksi/showBuku/'+id_buku;
            console.log(url);

            getBuku(url);
        })

        $('#id_anggota').on('change', function(e){
            let id_anggota = $('#id_anggota').val();
            console.log(id_anggota);

            let url = $(this).data('url')+'/transaksi/getAnggota/'+id_anggota;
            console.log(url);

            getAnggota(url);
        })
    })

    function getBuku(url){
        $.getJSON(url, function(data){
            if(data === false){
                alert('Buku tidak di temukan!');
                $('#id_buku').val("");
            }else{
                $('#judul_buku').val(data[0].judul_buku);
                $('#deskripsi').val(data[0].judul_buku);
                $('#kategori').val(data[0].judul_buku);
            }
        });
    }

    function getAnggota(url){
        $.getJSOn(url, function(data){
            if(data === false){
                alert('Data anggota tidak di temukan!');
                $('#id_anggota').val("");
                $('#nama_anggota').val("");
            }else{
                $('#nama_anggota').val(data.nama_anggota);
            }
        });
    }
</script>
@endsection