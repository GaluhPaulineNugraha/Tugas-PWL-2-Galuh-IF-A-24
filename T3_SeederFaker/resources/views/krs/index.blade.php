@extends('layout')

@section('content')
<div class="card-table card">
    <div class="card-header-custom">
        <i class="fas fa-clipboard-list me-2"></i> Data Kartu Rencana Studi (KRS)
        <a href="/krs/create" class="btn btn-light btn-sm float-end">
            <i class="fas fa-plus-circle me-1"></i> Tambah KRS
        </a>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 15%">NPM</th>
                        <th style="width: 25%">Mahasiswa</th>
                        <th style="width: 30%">Mata Kuliah</th>
                        <th style="width: 25%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $index => $k)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center"><strong>{{ $k->mahasiswa->npm ?? '-' }}</strong></td>
                        <td>{{ $k->mahasiswa->nama ?? '-' }}</td>
                        <td>{{ $k->matakuliah->nama_matakuliah ?? '-' }}</td>
                        <td class="text-center">
                            <a href="/krs/{{ $k->id }}" class="btn btn-info btn-sm btn-action">
                                <i class="fas fa-eye me-1"></i> Detail
                            </a>
                            <a href="/krs/{{ $k->id }}/edit" class="btn btn-warning btn-sm btn-action">
                                <i class="fas fa-edit me-1"></i> Edit
                            </a>
                            <form action="/krs/{{ $k->id }}" method="POST" style="display:inline">
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
                        <td colspan="5" class="text-center text-muted py-4">
                            <i class="fas fa-inbox fa-2x mb-2 d-block"></i>
                            Belum ada data KRS
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
</style>
@endsection