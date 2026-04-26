@extends('layout')

@section('content')
<h3>Edit Matakuliah</h3>

<form action="/matakuliah/{{ $data->kode_matakuliah }}" method="POST">
@csrf @method('PUT')

<input name="nama_matakuliah" value="{{ $data->nama_matakuliah }}" class="form-control mb-2">
<input name="sks" value="{{ $data->sks }}" class="form-control mb-2">

<button class="btn btn-success">Update</button>
</form>
@endsection