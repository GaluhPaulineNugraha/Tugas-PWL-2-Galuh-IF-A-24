@extends('layout')

@section('content')
<h3>Data Dosen</h3>

<a href="/dosen/create" class="btn btn-primary mb-2">Tambah</a>

<table class="table table-bordered">
<tr>
<th>NIDN</th>
<th>Nama</th>
<th>Aksi</th>
</tr>

@foreach($data as $d)
<tr>
<td>{{ $d->nidn }}</td>
<td>{{ $d->nama }}</td>
<td>
<a href="/dosen/{{ $d->nidn }}/edit" class="btn btn-warning btn-sm">Edit</a>
<form action="/dosen/{{ $d->nidn }}" method="POST" style="display:inline">
@csrf @method('DELETE')
<button class="btn btn-danger btn-sm">Hapus</button>
</form>
</td>
</tr>
@endforeach
</table>
@endsection