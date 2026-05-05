@extends('layout')

@section('content')
<div class="card-table card">
    <div class="card-header-custom">
        <i class="fas fa-user-graduate me-2"></i> Data Mahasiswa
        <a href="/mahasiswa/create" class="btn btn-light btn-sm float-end">
            <i class="fas fa-plus-circle me-1"></i> Tambah Mahasiswa
        </a>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 12%">NPM</th>
                        <th style="width: 25%">Nama Mahasiswa</th>
                        <th style="width: 15%">Jurusan</th>
                        <th style="width: 20%">Dosen PA</th>
                        <th style="width: 23%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $index => $m)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td><strong>{{ $m->npm }}</strong></td>
                        <td>{{ $m->nama }}</td>
                        <td><span class="badge bg-secondary">Teknik Informatika</span></td>
                        <td>{{ $m->dosen->nama ?? '-' }}</td>
                        <td class="text-center">
                            <a href="/mahasiswa/{{ $m->npm }}" class="btn btn-info btn-sm btn-action">
                                <i class="fas fa-eye me-1"></i> Detail
                            </a>
                            <a href="/mahasiswa/{{ $m->npm }}/edit" class="btn btn-warning btn-sm btn-action">
                                <i class="fas fa-edit me-1"></i> Edit
                            </a>
                            <form action="/mahasiswa/{{ $m->npm }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm btn-action" onclick="return confirm('Yakin hapus data ini?')">
                                    <i class="fas fa-trash me-1"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
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