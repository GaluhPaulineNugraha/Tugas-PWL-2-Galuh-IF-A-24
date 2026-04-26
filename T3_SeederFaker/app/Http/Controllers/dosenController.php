<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $data = Dosen::all();
        return view('dosen.index', compact('data'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        Dosen::create($request->all());
        return redirect('/dosen');
    }

    public function edit($nidn)
    {
        $data = Dosen::findOrFail($nidn);
        return view('dosen.edit', compact('data'));
    }

    public function update(Request $request, $nidn)
    {
        $data = Dosen::findOrFail($nidn);
        $data->update($request->all());
        return redirect('/dosen');
    }

    public function destroy($nidn)
    {
        Dosen::destroy($nidn);
        return redirect('/dosen');
    }
}