@extends('layout')

@section('content')
<h3>Data Jadwal</h3>

<a href="/jadwal/create" class="btn btn-primary mb-2">Tambah</a>

<table class="table table-bordered">
<tr>
<th>Matakuliah</th>
<th>Dosen</th>
<th>Kelas</th>
<th>Hari</th>
<th>Jam</th>
<th>Aksi</th>
</tr>

@foreach($data as $j)
<tr>
<td>{{ $j->matakuliah->nama_matakuliah }}</td>
<td>{{ $j->dosen->nama }}</td>
<td>{{ $j->kelas }}</td>
<td>{{ $j->hari }}</td>
<td>{{ $j->jam }}</td>
<td>
<a href="/jadwal/{{ $j->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
<form action="/jadwal/{{ $j->id }}" method="POST" style="display:inline">
@csrf @method('DELETE')
<button class="btn btn-danger btn-sm">Hapus</button>
</form>
</td>
</tr>
@endforeach
</table>
@endsection