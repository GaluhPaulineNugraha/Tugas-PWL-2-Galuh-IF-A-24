@extends('layout')

@section('content')
<div class="card shadow border-0" style="max-width: 600px; margin: 0 auto;">
    <div class="card-header-custom">
        <h5 class="mb-0"><i class="fas fa-edit me-2"></i> Edit KRS</h5>
    </div>
    <div class="card-body">
        <form action="/krs/{{ $data->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Mahasiswa</label>
                <select name="npm" class="form-control" required>
                    <option value="">Pilih Mahasiswa</option>
                    @foreach($mhs as $m)
                        <option value="{{ $m->npm }}" {{ $data->npm == $m->npm ? 'selected' : '' }}>
                            {{ $m->npm }} - {{ $m->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Mata Kuliah</label>
                <select name="kode_matakuliah" class="form-control" required>
                    <option value="">Pilih Mata Kuliah</option>
                    @foreach($mk as $m)
                        <option value="{{ $m->kode_matakuliah }}" {{ $data->kode_matakuliah == $m->kode_matakuliah ? 'selected' : '' }}>
                            {{ $m->kode_matakuliah }} - {{ $m->nama_matakuliah }} ({{ $m->sks }} SKS)
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary-custom w-100">
                <i class="fas fa-save me-2"></i> Update
            </button>
            <a href="/krs" class="btn btn-secondary w-100 mt-2">
                <i class="fas fa-arrow-left me-2"></i> Kembali
            </a>
        </form>
    </div>
</div>
@endsection