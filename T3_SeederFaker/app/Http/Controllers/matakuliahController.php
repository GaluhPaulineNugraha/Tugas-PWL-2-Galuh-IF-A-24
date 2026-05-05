<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function index()
    {
        $data = Matakuliah::all();
        return view('matakuliah.index', compact('data'));
    }

    public function show($kode)
    {
        $data = Matakuliah::with(['jadwal.dosen', 'krs.mahasiswa'])->findOrFail($kode);
        return view('matakuliah.show', compact('data'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required|string|max:8|unique:matakuliah,kode_matakuliah',
            'nama_matakuliah' => 'required|string|max:50',
            'sks' => 'required|integer|min:1|max:6'
        ]);

        Matakuliah::create($request->all());
        return redirect('/matakuliah')->with('success', 'Mata kuliah berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data = Matakuliah::findOrFail($id);
        return view('matakuliah.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_matakuliah' => 'required|string|max:50',
            'sks' => 'required|integer|min:1|max:6'
        ]);

        $data = Matakuliah::findOrFail($id);
        $data->update($request->all());
        return redirect('/matakuliah')->with('info', 'Mata kuliah berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Matakuliah::destroy($id);
        return redirect('/matakuliah')->with('error', 'Mata kuliah berhasil dihapus!');
    }
}