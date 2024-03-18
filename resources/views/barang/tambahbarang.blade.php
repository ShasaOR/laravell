@extends('layouts.admin')
@section('judul', 'Tambah Data Barang')

@section('content')
<div class="p-3">
    <form action="/barang" method="POST">
        @csrf
        <div class="mb-3">
            <label for="produkID" class="form-label">Produk ID</label>
            <input type="text" class="form-control" id="produkID" name="produkID" placeholder="Masukkan ID Produk">
            @error('produkID')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="namaProduk" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="namaProduk" name="namaProduk" placeholder="Masukkan Nama Produk">
            @error('namaProduk')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="hargaProduk" class="form-label">Harga Produk</label>
            <input type="text" class="form-control" id="hargaProduk" name="hargaProduk" placeholder="Masukkan Harga Produk">
            @error('hargaProduk')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tanggal_rilis" class="form-label">Tanggal Rilis</label>
            <input type="date" class="form-control" id="tanggal_rilis" name="tanggal_rilis">
            @error('tanggal_rilis')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            <div class="col">
                <a href="/barang" class="btn btn-secondary">Batal</a>
            </div>
        </div>
    </form>
</div>
@endsection
