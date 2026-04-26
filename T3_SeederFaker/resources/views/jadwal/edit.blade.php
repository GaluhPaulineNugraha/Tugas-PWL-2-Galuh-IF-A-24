@extends('layout')

@section('content')
<h3>Edit Jadwal</h3>

<form action="/jadwal/{{ $data->id }}" method="POST">
@csrf @method('PUT')

<select name="kode_matakuliah" class="form-control mb-2">
@foreach($mk as $m)
<option value="{{ $m->kode_matakuliah }}" {{ $data->kode_matakuliah == $m->kode_matakuliah ? 'selected' : '' }}>
{{ $m->nama_matakuliah }}
</option>
@endforeach
</select>

<select name="nidn" class="form-control mb-2">
@foreach($dosen as $d)
<option value="{{ $d->nidn }}" {{ $data->nidn == $d->nidn ? 'selected' : '' }}>
{{ $d->nama }}
</option>
@endforeach
</select>

<input name="kelas" value="{{ $data->kelas }}" class="form-control mb-2">
<input name="hari" value="{{ $data->hari }}" class="form-control mb-2">
<input type="time" name="jam" value="{{ $data->jam }}" class="form-control mb-2">

<button class="btn btn-success">Update</button>
</form>
@endsection