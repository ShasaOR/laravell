@extends('layouts.admin')

@section('judul', 'Detail Profil Barang')

@section('content')

<div class="p-3">
    <div class="card" style="width: 29rem;">
        <div class="card-body">
            <h3 class="card-title">Detail Data Profil Barang ke-{{ $barang->id }}</h3>
            <h6>Nama Produk: {{ $barang->namaProduk }}</h6>
            <h6>Harga Produk: {{ $barang->hargaProduk }}</h6>
            <h6>Tanggal Rilis: {{ $barang->tanggal_rilis }}</h6>
        </div>
    </div>

    <a href="/barang" class="btn btn-primary my-3">Kembali</a>
</div>

@endsection