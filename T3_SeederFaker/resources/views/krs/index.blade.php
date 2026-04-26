@extends('layout')

@section('content')
<h3>Data KRS</h3>

<a href="/krs/create" class="btn btn-primary mb-2">Tambah</a>

<table class="table table-bordered">
<tr>
<th>Mahasiswa</th>
<th>Matakuliah</th>
<th>Aksi</th>
</tr>

@foreach($data as $k)
<tr>
<td>{{ $k->mahasiswa->nama }}</td>
<td>{{ $k->matakuliah->nama_matakuliah }}</td>
<td>
<a href="/krs/{{ $k->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
<form action="/krs/{{ $k->id }}" method="POST">
@csrf @method('DELETE')
<button class="btn btn-danger btn-sm">Hapus</button>
</form>
</td>
</tr>
@endforeach
</table>
@endsection