<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Krs;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;

class KrsController extends Controller
{
    public function index()
    {
        $data = Krs::with(['mahasiswa', 'matakuliah'])->get();
        return view('krs.index', compact('data'));
    }

    public function show($id)
    {
        $data = Krs::with(['mahasiswa', 'matakuliah'])->findOrFail($id);
        return view('krs.show', compact('data'));
    }

    public function create()
    {
        $mhs = Mahasiswa::all();
        $mk = Matakuliah::all();
        return view('krs.create', compact('mhs', 'mk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'npm' => 'required|exists:mahasiswa,npm',
            'kode_matakuliah' => 'required|exists:matakuliah,kode_matakuliah'
        ]);

        Krs::create($request->all());
        return redirect('/krs')->with('success', 'KRS berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data = Krs::findOrFail($id);
        $mhs = Mahasiswa::all();
        $mk = Matakuliah::all();
        return view('krs.edit', compact('data', 'mhs', 'mk'));
    }

    public function update(Request $request, $id)
    {
        $data = Krs::findOrFail($id);
        $data->update($request->all());
        return redirect('/krs')->with('info', 'KRS berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Krs::destroy($id);
        return redirect('/krs')->with('error', 'KRS berhasil dihapus!');
    }
}