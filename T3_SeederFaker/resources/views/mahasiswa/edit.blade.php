@extends('layout')

@section('content')
<h3>Edit Mahasiswa</h3>

<form action="/mahasiswa/{{ $data->npm }}" method="POST">
@csrf @method('PUT')

<input name="nama" value="{{ $data->nama }}" class="form-control mb-2">

<select name="nidn" class="form-control mb-2">
@foreach($dosen as $d)
<option value="{{ $d->nidn }}" {{ $data->nidn == $d->nidn ? 'selected' : '' }}>
{{ $d->nama }}
</option>
@endforeach
</select>

<button class="btn btn-success">Update</button>
</form>
@endsection