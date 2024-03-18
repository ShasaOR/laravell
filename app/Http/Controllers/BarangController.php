<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $title = 'Peringatan!';
        $text = 'Apakah anda yakin ingin menghapus?';
        $icon = "Question";
        confirmDelete($title, $text);
        $barang = DB::table('barang')->get(); // Mengubah 'karyawan_tabel' menjadi 'barang' sesuai dengan nama tabel barang
        return view('barang.indexbarang', compact('barang')); // Mengubah 'indexkaryawan' menjadi 'indexbarang'
    }

    public function tambahbarang() // Mengubah 'tambahkaryawan' menjadi 'tambahbarang'
    {
        return view('barang.tambahbarang'); // Mengubah 'tambahkaryawan' menjadi 'tambahbarang'
    }

    public function simpan(Request $request) // Mengubah 'karyawan' menjadi 'simpan'
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'tanggal_rilis' => 'required|date', // Mengubah 'tanggal_lahir' menjadi 'tanggal_rilis'
        ]);

        DB::table('barang')->insert([
            'nama' => $request->nama,
            'harga' => $request->harga, // Mengubah 'jabatan' menjadi 'harga'
            'tanggal_rilis' => $request->tanggal_rilis, // Mengubah 'tanggal_lahir' menjadi 'tanggal_rilis'
        ]);
        
        Alert::success('Success', 'Data Berhasil ditambahkan');
        return redirect('/barang'); // Mengubah '/karyawan' menjadi '/barang'
    }

    public function show($id) // Mengubah 'show' menjadi 'show'
    {
        $barang = DB::table('barang')->find($id); // Mengubah 'karyawan_tabel' menjadi 'barang'
        return view('', compact('barang')); // Mengubah 'detailkaryawan' menjadi 'detailbarang'
    }

    public function edit($id) // Mengubah 'edit' menjadi 'edit'
    {
        $barang = DB::table('barang')->find($id); // Mengubah 'karyawan_tabel' menjadi 'barang'
        return view('barang.editbarang', compact('barang')); // Mengubah 'editkaryawan' menjadi 'editbarang'
    }

    public function update(Request $request, $id) // Mengubah 'update' menjadi 'update'
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'tanggal_rilis' => 'required|date', // Mengubah 'tanggal_lahir' menjadi 'tanggal_rilis'
        ]);

        $request = DB::table('barang')->where('id', $id)->update([ // Mengubah 'karyawan_tabel' menjadi 'barang'
            'nama' => $request->nama,
            'harga' => $request->harga, // Mengubah 'jabatan' menjadi 'harga'
            'tanggal_rilis' => $request->tanggal_rilis, // Mengubah 'tanggal_lahir' menjadi 'tanggal_rilis'
        ]);

        Alert::success('Success', 'Data Berhasil diupdate');
        return redirect('/barang'); // Mengubah '/karyawan' menjadi '/barang'
    }

    public function destroy($id) { // Mengubah 'destroy' menjadi 'destroy'
        $barang = DB::table('barang')->where('id', $id)->delete(); // Mengubah 'karyawan_tabel' menjadi 'barang'
        Alert::success('Success', 'Data Berhasil di Hapus');
        return redirect('/barang'); // Mengubah '/karyawan' menjadi '/barang'
    }
}