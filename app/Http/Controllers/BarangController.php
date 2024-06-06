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
        $showmenu = auth()->user()->isAdmin();
        $barang = DB::table('barang')->get();
        return view('barang.indexbarang', compact('barang','showmenu')); 
    }

    public function tambahbarang() // Mengubah 'tambahkaryawan' menjadi 'tambahbarang'
    { 
        $showmenu = auth()->user()->isAdmin();
        $barang = DB::table('barang')->get();
        return view('barang.tambahbarang', compact('barang','showmenu')); // Mengubah 'tambahkaryawan' menjadi 'tambahbarang'
    }

    public function simpan(Request $request) // Mengubah 'karyawan' menjadi 'simpan'
    {
        $showmenu = auth()->user()->isAdmin();
        $request->validate([
            'namaProduk' => 'required',
            'hargaProduk' => 'required',
            'tanggal_rilis' => 'required|date', // Mengubah 'tanggal_lahir' menjadi 'tanggal_rilis'
        ]);

        DB::table('barang')->insert([
            'namaProduk' => $request-> namaProduk,
            'hargaProduk' => $request-> hargaProduk, // Mengubah 'jabatan' menjadi 'harga'
            'tanggal_rilis' => $request-> tanggal_rilis, // Mengubah 'tanggal_lahir' menjadi 'tanggal_rilis'
        ]);
        
        Alert::success('Success', 'Data Berhasil ditambahkan');
        return redirect('/barang'); // Mengubah '/karyawan' menjadi '/barang'
    }

    public function show($id) // Mengubah 'show' menjadi 'show'
    { 
        $showmenu = auth()->user()->isAdmin();
        $barang = DB::table('barang')->find($id); // Mengubah 'karyawan_tabel' menjadi 'barang'
        return view('barang.detailbarang', compact('barang', 'showmenu')); // Mengubah 'detailkaryawan' menjadi 'detailbarang'
    }

    public function edit($id) // Mengubah 'edit' menjadi 'edit'
    { 
        $showmenu = auth()->user()->isAdmin();
        $barang = DB::table('barang')->find($id); // Mengubah 'karyawan_tabel' menjadi 'barang'
        return view('barang.editbarang', compact('barang', 'showmenu')); // Mengubah 'editkaryawan' menjadi 'editbarang'
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

    public function destroy($id) // Mengubah 'destroy' menjadi 'destroy'
    {
        $barang = DB::table('barang')->where('id', $id)->delete(); 
        Alert::success('Success', 'Data Berhasil di Hapus');
        return redirect('/barang'); // 
    }
}