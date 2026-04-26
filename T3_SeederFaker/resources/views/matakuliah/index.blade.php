@extends('layout')

@section('content')
<h3>Data Matakuliah</h3>

<a href="/matakuliah/create" class="btn btn-primary mb-2">Tambah</a>

<table class="table table-bordered">
<tr>
<th>Kode</th>
<th>Nama</th>
<th>SKS</th>
<th>Aksi</th>
</tr>

@foreach($data as $m)
<tr>
<td>{{ $m->kode_matakuliah }}</td>
<td>{{ $m->nama_matakuliah }}</td>
<td>{{ $m->sks }}</td>
<td>
<a href="/matakuliah/{{ $m->kode_matakuliah }}/edit" class="btn btn-warning btn-sm">Edit</a>
<form action="/matakuliah/{{ $m->kode_matakuliah }}" method="POST" style="display:inline">
@csrf @method('DELETE')
<button class="btn btn-danger btn-sm">Hapus</button>
</form>
</td>
</tr>
@endforeach
</table>
@endsection