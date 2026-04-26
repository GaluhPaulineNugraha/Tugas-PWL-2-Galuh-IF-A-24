@extends('layout')

@section('content')
<h3>Tambah KRS</h3>

<form action="/krs" method="POST">
@csrf

<select name="npm" class="form-control mb-2">
@foreach($mhs as $m)
<option value="{{ $m->npm }}">{{ $m->nama }}</option>
@endforeach
</select>

<select name="kode_matakuliah" class="form-control mb-2">
@foreach($mk as $m)
<option value="{{ $m->kode_matakuliah }}">{{ $m->nama_matakuliah }}</option>
@endforeach
</select>

<button class="btn btn-primary">Submit</button>
</form>
@endsection