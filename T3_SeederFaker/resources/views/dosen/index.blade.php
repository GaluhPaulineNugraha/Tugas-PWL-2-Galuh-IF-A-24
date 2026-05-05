@extends('layout')

@section('content')
<div class="card-table card">
    <div class="card-header-custom">
        <i class="fas fa-chalkboard-user me-2"></i> Data Dosen
        <a href="/dosen/create" class="btn btn-light btn-sm float-end">
            <i class="fas fa-plus-circle me-1"></i> Tambah Dosen
        </a>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 15%">NIDN</th>
                        <th style="width: 35%">Nama Dosen</th>
                        <th style="width: 10%">Jml Mahasiswa</th>
                        <th style="width: 35%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $index => $d)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td><strong>{{ $d->nidn }}</strong></td>
                        <td>{{ $d->nama }}</td>
                        <td class="text-center">
                            <span class="badge bg-primary">{{ $d->mahasiswa->count() }}</span>
                        </td>
                        <td class="text-center">
                            <a href="/dosen/{{ $d->nidn }}" class="btn btn-info btn-sm btn-action">
                                <i class="fas fa-eye me-1"></i> Detail
                            </a>
                            <a href="/dosen/{{ $d->nidn }}/edit" class="btn btn-warning btn-sm btn-action">
                                <i class="fas fa-edit me-1"></i> Edit
                            </a>
                            <form action="/dosen/{{ $d->nidn }}" method="POST" style="display:inline">
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