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

    public function create()
    {
        $dosen = Dosen::all();
        return view('mahasiswa.create', compact('dosen'));
    }

    public function store(Request $request)
    {
        Mahasiswa::create($request->all());
        return redirect('/mahasiswa');
    }

    public function edit($npm)
    {
        $data = Mahasiswa::findOrFail($npm);
        $dosen = Dosen::all();
        return view('mahasiswa.edit', compact('data', 'dosen'));
    }

    public function update(Request $request, $npm)
    {
        $data = Mahasiswa::findOrFail($npm);
        $data->update($request->all());
        return redirect('/mahasiswa');
    }

    public function destroy($npm)
    {
        Mahasiswa::destroy($npm);
        return redirect('/mahasiswa');
    }
}