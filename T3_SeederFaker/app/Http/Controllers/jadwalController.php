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
        $data = Jadwal::with(['dosen','matakuliah'])->get();
        return view('jadwal.index', compact('data'));
    }

    public function create()
    {
        $dosen = Dosen::all();
        $mk = Matakuliah::all();
        return view('jadwal.create', compact('dosen','mk'));
    }

    public function store(Request $request)
    {
        Jadwal::create($request->all());
        return redirect('/jadwal');
    }

    public function edit($id)
    {
        $data = Jadwal::findOrFail($id);
        $dosen = Dosen::all();
        $mk = Matakuliah::all();
        return view('jadwal.edit', compact('data','dosen','mk'));
    }

    public function update(Request $request, $id)
    {
        $data = Jadwal::findOrFail($id);
        $data->update($request->all());
        return redirect('/jadwal');
    }

    public function destroy($id)
    {
        Jadwal::destroy($id);
        return redirect('/jadwal');
    }
}