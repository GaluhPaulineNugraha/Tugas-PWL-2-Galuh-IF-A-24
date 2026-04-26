@extends('layout')

@section('content')
<h3>Tambah Dosen</h3>

<form action="/dosen" method="POST">
@csrf
<input name="nidn" class="form-control mb-2" placeholder="NIDN">
<input name="nama" class="form-control mb-2" placeholder="Nama">
<button class="btn btn-primary">Submit</button>
</form>
@endsection