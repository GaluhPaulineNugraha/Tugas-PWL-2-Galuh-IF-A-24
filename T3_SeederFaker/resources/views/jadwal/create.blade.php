@extends('layout')

@section('content')
<div class="card shadow border-0" style="max-width: 600px; margin: 0 auto;">
    <div class="card-header-custom">
        <h5 class="mb-0"><i class="fas fa-plus-circle me-2"></i> Tambah Jadwal Kuliah</h5>
    </div>
    <div class="card-body">
        <form action="/jadwal" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Mata Kuliah</label>
                <select name="kode_matakuliah" class="form-control" required>
                    <option value="">Pilih Mata Kuliah</option>
                    @foreach($mk as $m)
                        <option value="{{ $m->kode_matakuliah }}">{{ $m->kode_matakuliah }} - {{ $m->nama_matakuliah }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Dosen Pengajar</label>
                <select name="nidn" class="form-control" required>
                    <option value="">Pilih Dosen</option>
                    @foreach($dosen as $d)
                        <option value="{{ $d->nidn }}">{{ $d->nidn }} - {{ $d->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Kelas</label>
                <select name="kelas" class="form-control" required>
                    <option value="">Pilih Kelas</option>
                    <option value="A">Kelas A</option>
                    <option value="B">Kelas B</option>
                    <option value="C">Kelas C</option>
                    <option value="D">Kelas D</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Hari</label>
                <select name="hari" class="form-control" required>
                    <option value="">Pilih Hari</option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Jam Mulai</label>
                <input type="time" name="jam" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary-custom w-100">
                <i class="fas fa-save me-2"></i> Simpan
            </button>
            <a href="/jadwal" class="btn btn-secondary w-100 mt-2">
                <i class="fas fa-arrow-left me-2"></i> Kembali
            </a>
        </form>
    </div>
</div>
@endsection