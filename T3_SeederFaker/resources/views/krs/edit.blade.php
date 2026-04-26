@extends('layout')

@section('content')
<h3>Edit KRS</h3>

<form action="/krs/{{ $data->id }}" method="POST">
@csrf @method('PUT')

<select name="npm" class="form-control mb-2">
@foreach($mhs as $m)
<option value="{{ $m->npm }}" {{ $data->npm == $m->npm ? 'selected' : '' }}>
{{ $m->nama }}
</option>
@endforeach
</select>

<select name="kode_matakuliah" class="form-control mb-2">
@foreach($mk as $m)
<option value="{{ $m->kode_matakuliah }}" {{ $data->kode_matakuliah == $m->kode_matakuliah ? 'selected' : '' }}>
{{ $m->nama_matakuliah }}
</option>
@endforeach
</select>

<button class="btn btn-success">Update</button>
</form>
@endsection