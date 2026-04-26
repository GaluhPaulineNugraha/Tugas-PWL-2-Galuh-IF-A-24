@extends('layout')

@section('content')
<h3>Data Mahasiswa</h3>

<a href="/mahasiswa/create" class="btn btn-primary mb-2">Tambah</a>

<table class="table table-bordered">
<tr>
<th>NPM</th>
<th>Nama</th>
<th>Dosen</th>
<th>Aksi</th>
</tr>

@foreach($data as $m)
<tr>
<td>{{ $m->npm }}</td>
<td>{{ $m->nama }}</td>
<td>{{ $m->dosen->nama ?? '-' }}</td>
<td>
<a href="/mahasiswa/{{ $m->npm }}/edit" class="btn btn-warning btn-sm">Edit</a>
<form action="/mahasiswa/{{ $m->npm }}" method="POST" style="display:inline">
@csrf @method('DELETE')
<button class="btn btn-danger btn-sm">Hapus</button>
</form>
</td>
</tr>
@endforeach
</table>
@endsection