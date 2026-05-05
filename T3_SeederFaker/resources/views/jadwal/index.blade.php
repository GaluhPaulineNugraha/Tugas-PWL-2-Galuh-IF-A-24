@extends('layout')

@section('content')
<div class="card-table card">
    <div class="card-header-custom">
        <i class="fas fa-calendar-week me-2"></i> Data Jadwal Kuliah
        <a href="/jadwal/create" class="btn btn-light btn-sm float-end">
            <i class="fas fa-plus-circle me-1"></i> Tambah Jadwal
        </a>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 20%">Mata Kuliah</th>
                        <th style="width: 20%">Dosen</th>
                        <th style="width: 8%">Kelas</th>
                        <th style="width: 12%">Hari</th>
                        <th style="width: 10%">Jam</th>
                        <th style="width: 25%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $index => $j)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $j->matakuliah->nama_matakuliah ?? '-' }}</td>
                        <td>{{ $j->dosen->nama ?? '-' }}</td>
                        <td class="text-center">
                            <span class="badge bg-primary">Kelas {{ $j->kelas }}</span>
                        </td>
                        <td class="text-center">{{ $j->hari }}</td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($j->jam)->format('H:i') }} WIB</td>
                        <td class="text-center">
                            <a href="/jadwal/{{ $j->id }}" class="btn btn-info btn-sm btn-action">
                                <i class="fas fa-eye me-1"></i> Detail
                            </a>
                            <a href="/jadwal/{{ $j->id }}/edit" class="btn btn-warning btn-sm btn-action">
                                <i class="fas fa-edit me-1"></i> Edit
                            </a>
                            <form action="/jadwal/{{ $j->id }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm btn-action" onclick="return confirm('Yakin hapus data ini?')">
                                    <i class="fas fa-trash me-1"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted py-4">
                            <i class="fas fa-inbox fa-2x mb-2 d-block"></i>
                            Belum ada data jadwal kuliah
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    .btn-action {
        border-radius: 20px;
        padding: 5px 12px;
        margin: 0 3px;
        transition: all 0.2s;
    }
    .btn-action:hover {
        transform: translateY(-2px);
    }
    .badge {
        font-size: 12px;
        padding: 6px 12px;
        border-radius: 20px;
    }
</style>
@endsection