@extends('layout')

@section('content')
<div class="card shadow border-0">
    <div class="card-header bg-gradient-info text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fas fa-id-card me-2"></i> Detail Dosen</h5>
        <a href="/dosen" class="btn btn-light btn-sm rounded-pill">
            <i class="fas fa-arrow-left me-1"></i> Kembali
        </a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="avatar-circle mb-3">
                    <i class="fas fa-chalkboard-user fa-5x text-primary"></i>
                </div>
                <h5>{{ $data->nama }}</h5>
                <p class="text-muted"><small>NIDN: {{ $data->nidn }}</small></p>
            </div>
            <div class="col-md-8">
                <table class="table table-borderless">
                    <tr>
                        <th width="30%"><i class="fas fa-hashtag me-2"></i>NIDN</th>
                        <td>: <strong>{{ $data->nidn }}</strong></td>
                    </tr>
                    <tr>
                        <th><i class="fas fa-user me-2"></i>Nama Lengkap</th>
                        <td>: {{ $data->nama }}</td>
                    </tr>
                    <tr>
                        <th><i class="fas fa-users me-2"></i>Jumlah Mahasiswa Bimbingan</th>
                        <td>: <span class="badge bg-primary">{{ $data->mahasiswa->count() }} Mahasiswa</span></td>
                    </tr>
                    <tr>
                        <th><i class="fas fa-calendar me-2"></i>Terdaftar Sejak</th>
                        <td>: {{ $data->created_at->format('d F Y H:i') }}</td>
                    </tr>
                </table>
            </div>
        </div>

        @if($data->jadwal->count() > 0)
        <hr>
        <h6 class="mt-4"><i class="fas fa-clock me-2"></i> Jadwal Mengajar</h6>
        <div class="table-responsive">
            <table class="table table-sm table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Mata Kuliah</th>
                        <th>Kelas</th>
                        <th>Hari</th>
                        <th>Jam</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data->jadwal as $jadwal)
                    <tr>
                        <td>{{ $jadwal->matakuliah->nama_matakuliah }}</td>
                        <td>{{ $jadwal->kelas }}</td>
                        <td>{{ $jadwal->hari }}</td>
                        <td>{{ $jadwal->jam }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>

<style>
    .avatar-circle {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        color: white;
    }
    .bg-gradient-info {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
</style>
@endsection