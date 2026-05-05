<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Dosen;
use App\Models\Matakuliah;

class JadwalController extends Controller
{
    public function index()
    {
        $data = Jadwal::with(['dosen', 'matakuliah'])->get();
        return view('jadwal.index', compact('data'));
    }

    public function show($id)
    {
        $data = Jadwal::with(['dosen', 'matakuliah'])->findOrFail($id);
        return view('jadwal.show', compact('data'));
    }

    public function create()
    {
        $dosen = Dosen::all();
        $mk = Matakuliah::all();
        return view('jadwal.create', compact('dosen', 'mk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required|exists:matakuliah,kode_matakuliah',
            'nidn' => 'required|exists:dosen,nidn',
            'kelas' => 'required|string|max:1',
            'hari' => 'required|string|in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu',
            'jam' => 'required'
        ]);

        Jadwal::create($request->all());
        return redirect('/jadwal')->with('success', 'Jadwal berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data = Jadwal::findOrFail($id);
        $dosen = Dosen::all();
        $mk = Matakuliah::all();
        return view('jadwal.edit', compact('data', 'dosen', 'mk'));
    }

    public function update(Request $request, $id)
    {
        $data = Jadwal::findOrFail($id);
        $data->update($request->all());
        return redirect('/jadwal')->with('info', 'Jadwal berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Jadwal::destroy($id);
        return redirect('/jadwal')->with('error', 'Jadwal berhasil dihapus!');
    }
}