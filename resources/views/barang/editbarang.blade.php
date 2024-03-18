@extends('layouts.admin')

@section('content')
<div class="p-3">
    <h2>Edit Data Profil Barang {{ $barang->id }} </h2>
    <form action="{{ route('barang.update', $barang->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="produkID">Produk ID</label>
            <input type="text" class="form-control" name="produkID" value="{{ $barang->produkID }}" id="produkID" placeholder="Masukkan Produk ID">
            @error('produkID')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="namaProduk">Nama Produk</label>
            <input type="text" class="form-control" name="namaProduk" value="{{ $barang->namaProduk }}" id="namaProduk" placeholder="Masukkan Nama Produk">
            @error('namaProduk')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="hargaProduk">Harga Produk</label>
            <input type="text" class="form-control" name="hargaProduk" value="{{ $barang->hargaProduk }}" id="hargaProduk" placeholder="Masukkan Harga Produk">
            @error('hargaProduk')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="tanggal_rilis">Tanggal Rilis</label>
            <input type="date" class="form-control" name="tanggal_rilis" value="{{ $barang->tanggal_rilis }}" id="tanggal_rilis">
            @error('tanggal_rilis')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <a href="/barang" class="btn btn-danger my-3">Kembali</a>
        <button type="submit" class="btn btn-success">Update Data</button>
    </form>
</div>
@endsection