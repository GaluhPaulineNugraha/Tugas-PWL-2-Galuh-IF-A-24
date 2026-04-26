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

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        Matakuliah::create($request->all());
        return redirect('/matakuliah');
    }

    public function edit($id)
    {
        $data = Matakuliah::findOrFail($id);
        return view('matakuliah.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Matakuliah::findOrFail($id);
        $data->update($request->all());
        return redirect('/matakuliah');
    }

    public function destroy($id)
    {
        Matakuliah::destroy($id);
        return redirect('/matakuliah');
    }
}