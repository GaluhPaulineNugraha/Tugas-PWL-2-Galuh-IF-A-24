<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $data = Dosen::with('mahasiswa')->get();
        return view('dosen.index', compact('data'));
    }

    public function show($nidn)
    {
        $data = Dosen::with(['mahasiswa', 'jadwal.matakuliah'])->findOrFail($nidn);
        return view('dosen.show', compact('data'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nidn' => 'required|string|size:10|unique:dosen,nidn',
            'nama' => 'required|string|max:50'
        ]);

        Dosen::create($request->all());
        return redirect('/dosen')->with('success', 'Data dosen berhasil ditambahkan!');
    }

    public function edit($nidn)
    {
        $data = Dosen::findOrFail($nidn);
        return view('dosen.edit', compact('data'));
    }

    public function update(Request $request, $nidn)
    {
        $request->validate([
            'nama' => 'required|string|max:50'
        ]);

        $data = Dosen::findOrFail($nidn);
        $data->update($request->all());
        return redirect('/dosen')->with('info', 'Data dosen berhasil diperbarui!');
    }

    public function destroy($nidn)
    {
        Dosen::destroy($nidn);
        return redirect('/dosen')->with('error', 'Data dosen berhasil dihapus!');
    }
}