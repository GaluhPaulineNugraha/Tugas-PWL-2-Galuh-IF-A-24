@extends('layout')

@section('content')
<div class="card shadow border-0" style="max-width: 600px; margin: 0 auto;">
    <div class="card-header-custom">
        <h5 class="mb-0"><i class="fas fa-edit me-2"></i> Edit Jadwal Kuliah</h5>
    </div>
    <div class="card-body">
        <form action="/jadwal/{{ $data->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Mata Kuliah</label>
                <select name="kode_matakuliah" class="form-control" required>
                    <option value="">Pilih Mata Kuliah</option>
                    @foreach($mk as $m)
                        <option value="{{ $m->kode_matakuliah }}" {{ $data->kode_matakuliah == $m->kode_matakuliah ? 'selected' : '' }}>
                            {{ $m->kode_matakuliah }} - {{ $m->nama_matakuliah }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Dosen Pengajar</label>
                <select name="nidn" class="form-control" required>
                    <option value="">Pilih Dosen</option>
                    @foreach($dosen as $d)
                        <option value="{{ $d->nidn }}" {{ $data->nidn == $d->nidn ? 'selected' : '' }}>
                            {{ $d->nidn }} - {{ $d->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Kelas</label>
                <select name="kelas" class="form-control" required>
                    <option value="A" {{ $data->kelas == 'A' ? 'selected' : '' }}>Kelas A</option>
                    <option value="B" {{ $data->kelas == 'B' ? 'selected' : '' }}>Kelas B</option>
                    <option value="C" {{ $data->kelas == 'C' ? 'selected' : '' }}>Kelas C</option>
                    <option value="D" {{ $data->kelas == 'D' ? 'selected' : '' }}>Kelas D</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Hari</label>
                <select name="hari" class="form-control" required>
                    <option value="Senin" {{ $data->hari == 'Senin' ? 'selected' : '' }}>Senin</option>
                    <option value="Selasa" {{ $data->hari == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                    <option value="Rabu" {{ $data->hari == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                    <option value="Kamis" {{ $data->hari == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                    <option value="Jumat" {{ $data->hari == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                    <option value="Sabtu" {{ $data->hari == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Jam Mulai</label>
                <input type="time" name="jam" class="form-control" value="{{ $data->jam }}" required>
            </div>
            <button type="submit" class="btn btn-primary-custom w-100">
                <i class="fas fa-save me-2"></i> Update
            </button>
            <a href="/jadwal" class="btn btn-secondary w-100 mt-2">
                <i class="fas fa-arrow-left me-2"></i> Kembali
            </a>
        </form>
    </div>
</div>
@endsection