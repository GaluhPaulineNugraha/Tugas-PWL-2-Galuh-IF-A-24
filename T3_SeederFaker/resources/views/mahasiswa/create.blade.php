@extends('layout')

@section('content')
<h3>Tambah Mahasiswa</h3>

<form action="/mahasiswa" method="POST">
@csrf
<input name="npm" class="form-control mb-2" placeholder="NPM">
<input name="nama" class="form-control mb-2" placeholder="Nama">

<select name="nidn" class="form-control mb-2">
@foreach($dosen as $d)
<option value="{{ $d->nidn }}">{{ $d->nama }}</option>
@endforeach
</select>

<button class="btn btn-primary">Submit</button>
</form>
@endsection