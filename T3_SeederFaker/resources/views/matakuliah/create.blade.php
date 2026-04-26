@extends('layout')

@section('content')
<h3>Tambah Matakuliah</h3>

<form action="/matakuliah" method="POST">
@csrf
<input name="kode_matakuliah" class="form-control mb-2" placeholder="Kode">
<input name="nama_matakuliah" class="form-control mb-2" placeholder="Nama">
<input name="sks" class="form-control mb-2" placeholder="SKS">
<button class="btn btn-primary">Submit</button>
</form>
@endsection