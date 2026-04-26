@extends('layout')

@section('content')
<h3>Edit Dosen</h3>

<form action="/dosen/{{ $data->nidn }}" method="POST">
@csrf @method('PUT')
<input name="nama" value="{{ $data->nama }}" class="form-control mb-2">
<button class="btn btn-success">Update</button>
</form>
@endsection