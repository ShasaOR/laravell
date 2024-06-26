@extends('layouts.admin')

@section('judul', 'profile')

@section('content')

<div class="container-fluid">
    {{-- Kelola profile --}}
    <!-- <a href="/tambahbarang" class="btn btn-primary my-3">Tambah Data Barang</a> -->
 
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col" class="sortable">No</th>
                <th scope="col" class="sortable">namaLengkap</th>
                <th scope="col" class="sortable">nomorWhatsapp</th>
                <th scope="col" class="sortable">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($profile as $key => $value)
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$value->namaLengkap}}</td>
                <td>{{$value->nomorWhatsapp}}</td>
                <td>{{$value->Alamat}}</td>
                <td class="mr-3">
                    <a href="/barang/{{$value->id}}" class="btn btn-primary" title="Lihat Detail"><i class="fas fa-eye mr-2"></i>Lihat Data</a>
                    <a href="/barang/{{$value->id}}/edit" class="btn btn-warning" title="Edit Data"><i class="fas fa-edit mr-2"></i>Edit</a>
                    <form action="/barang/{{$value->id}}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mt-1" title="Hapus Data" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash-alt mr-2"></i>Hapus</button>
                    </form>                   
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">No data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
