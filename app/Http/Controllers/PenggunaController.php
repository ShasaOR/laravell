<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    // Menampilkan daftar pengguna
    public function index()
    {
        $users = Pengguna::all();
        return view('users.index', compact('users'));
    }

    // Menampilkan formulir tambah pengguna
    public function create()
    {
        return view('users.create');
    }

    // Menyimpan pengguna baru ke database
    public function store(Request $request)
    {
        $user = new Pengguna($request->all());
        $user->save();
        return redirect()->route('Pengguna.index');
    }

    // Menampilkan detail pengguna
    public function show(Pengguna $user)
    {
        return view('users.show', compact('user'));
    }

    // Menampilkan formulir edit pengguna
    public function edit(Pengguna $user)
    {
        return view('users.edit', compact('user'));
    }

    // Memperbarui data pengguna di database
    public function update(Request $request, Pengguna $user)
    {
        $user->update($request->all());
        return redirect()->route('Pengguna.index');
    }

    // Menghapus pengguna dari database
    public function destroy(Pengguna $user)
    {
        $user->delete();
        return redirect()->route('Pengguna.index');
    }
}
