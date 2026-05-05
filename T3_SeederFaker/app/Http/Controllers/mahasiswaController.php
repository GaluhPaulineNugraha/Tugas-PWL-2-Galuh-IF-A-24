<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::with('dosen')->get();
        return view('mahasiswa.index', compact('data'));
    }

    public function show($npm)
    {
        $data = Mahasiswa::with(['dosen', 'krs.matakuliah'])->findOrFail($npm);
        return view('mahasiswa.show', compact('data'));
    }

    public function create()
    {
        $dosen = Dosen::all();
        return view('mahasiswa.create', compact('dosen'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'npm' => 'required|string|size:10|unique:mahasiswa,npm',
            'nama' => 'required|string|max:50',
            'nidn' => 'required|exists:dosen,nidn'
        ]);

        Mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('success', 'Mahasiswa berhasil ditambahkan!');
    }

    public function edit($npm)
    {
        $data = Mahasiswa::findOrFail($npm);
        $dosen = Dosen::all();
        return view('mahasiswa.edit', compact('data', 'dosen'));
    }

    public function update(Request $request, $npm)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'nidn' => 'required|exists:dosen,nidn'
        ]);

        $data = Mahasiswa::findOrFail($npm);
        $data->update($request->all());
        return redirect('/mahasiswa')->with('info', 'Data mahasiswa berhasil diperbarui!');
    }

    public function destroy($npm)
    {
        Mahasiswa::destroy($npm);
        return redirect('/mahasiswa')->with('error', 'Data mahasiswa berhasil dihapus!');
    }
}