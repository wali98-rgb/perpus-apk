@extends('layout.main')

@section('title', 'Laravel - SI Perpustakaan')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1 class="display-6">Pinjam Buku</h1>
        <hr class="my-4">
        <form action="/transaksi" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="type_transaksi">Type Transaksi</label>
            <select class="form-control" name="type_transaksi" id="type_transaksi">
                <option value="pinjam">Pinjam</option>
            </select>
        </div>

        <div class="form-group">
            <label for="id_buku">Kode Buku</label>
            <input type="text" class="form-control" name="id_buku" id="id_buku" placeholder="Id Buku" data-url="{{url('/')}}">
        </div>

        <div class="form-group">
            <label for="judul_buku">Judul Buku</label>
            <input type="text" class="form-control" name="judul_buku" id="judul_buku" placeholder="Judul Buku" readonly="true">
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi Buku</label>
            <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi Buku" readonly="true">
        </div>

        <div class="form-group">
            <label for="kategori">Kategori Buku</label>
            <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori Buku" readonly="true">
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label for="tgl_pinjam">Tanggal Pinjam</label>
                    <input type="date" id="tgl_pinjam" name="tgl_pinjam" class="form-control">
                </div>
                
                <div class="col-sm-6">
                    <label for="tgl_kembali">Tanggal Kembali</label>
                    <input type="date" id="tgl_kembali" name="tgl_kembali" class="form-control" readonly="true">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="id_anggota">Id Anggota Peminjam</label>
            <input type="text" class="form-control" name="id_anggota" id="id_anggota" placeholder="Id Anggota" data-url="{{url('/')}}">
        </div>

        <div class="form-group">
            <label for="nama_anggota">Nama Peminjam</label>
            <input type="text" class="form-control" name="nama_anggota" id="nama_anggota" placeholder="Nama Peminjam" readonly="true">
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
                $('#deskripsi').val(data[0].deskripsi);
                $('#kategori').val(data[0].kategori);
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