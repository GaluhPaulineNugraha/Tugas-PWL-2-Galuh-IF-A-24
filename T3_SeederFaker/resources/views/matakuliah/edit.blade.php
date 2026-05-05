@extends('layout')

@section('content')
<div class="card shadow border-0" style="max-width: 600px; margin: 0 auto;">
    <div class="card-header-custom">
        <h5 class="mb-0"><i class="fas fa-edit me-2"></i> Edit Mata Kuliah</h5>
        <a href="/matakuliah" class="btn btn-light btn-sm float-end">
            <i class="fas fa-arrow-left me-1"></i> Kembali
        </a>
    </div>
    <div class="card-body">
        <form action="/matakuliah/{{ $data->kode_matakuliah }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Kode Mata Kuliah</label>
                <input type="text" class="form-control" value="{{ $data->kode_matakuliah }}" disabled>
                <small class="text-muted">Kode tidak dapat diubah</small>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Mata Kuliah <span class="text-danger">*</span></label>
                <input type="text" name="nama_matakuliah" class="form-control @error('nama_matakuliah') is-invalid @enderror" 
                       value="{{ old('nama_matakuliah', $data->nama_matakuliah) }}" required>
                @error('nama_matakuliah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah SKS <span class="text-danger">*</span></label>
                <input type="number" name="sks" class="form-control @error('sks') is-invalid @enderror" 
                       min="1" max="6" value="{{ old('sks', $data->sks) }}" required>
                @error('sks')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary-custom w-100">
                <i class="fas fa-save me-2"></i> Update
            </button>
        </form>
    </div>
</div>
@endsection