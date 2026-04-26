@extends('layout')

@section('content')
<h3>Tambah Jadwal</h3>

<form action="/jadwal" method="POST">
@csrf

<select name="kode_matakuliah" class="form-control mb-2">
@foreach($mk as $m)
<option value="{{ $m->kode_matakuliah }}">{{ $m->nama_matakuliah }}</option>
@endforeach
</select>

<select name="nidn" class="form-control mb-2">
@foreach($dosen as $d)
<option value="{{ $d->nidn }}">{{ $d->nama }}</option>
@endforeach
</select>

<input name="kelas" class="form-control mb-2" placeholder="Kelas">
<input name="hari" class="form-control mb-2" placeholder="Hari">
<input type="time" name="jam" class="form-control mb-2">

<button class="btn btn-primary">Submit</button>
</form>
@endsection