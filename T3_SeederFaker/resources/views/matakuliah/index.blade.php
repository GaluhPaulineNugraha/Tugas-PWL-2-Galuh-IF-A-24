@extends('layout')

@section('content')
<div class="card-table card">
    <div class="card-header-custom">
        <i class="fas fa-book-open me-2"></i> Data Mata Kuliah
        <a href="/matakuliah/create" class="btn btn-light btn-sm float-end">
            <i class="fas fa-plus-circle me-1"></i> Tambah Matakuliah
        </a>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 20%">Kode MK</th>
                        <th style="width: 40%">Nama Matakuliah</th>
                        <th style="width: 10%">SKS</th>
                        <th style="width: 25%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $index => $m)
                    <tr style="height: 60px;">
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td class="text-center">
                            <span class="fw-bold">{{ $m->kode_matakuliah }}</span>
                        </td>
                        <td>{{ $m->nama_matakuliah }}</td>
                        <td class="text-center">
                            <span class="badge bg-success rounded-pill px-3 py-2">{{ $m->sks }} SKS</span>
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="/matakuliah/{{ $m->kode_matakuliah }}" class="btn btn-info btn-sm" style="border-radius: 20px; padding: 5px 15px;">
                                    <i class="fas fa-eye me-1"></i> Detail
                                </a>
                                <a href="/matakuliah/{{ $m->kode_matakuliah }}/edit" class="btn btn-warning btn-sm" style="border-radius: 20px; padding: 5px 15px;">
                                    <i class="fas fa-edit me-1"></i> Edit
                                </a>
                                <form action="/matakuliah/{{ $m->kode_matakuliah }}" method="POST" style="display:inline-block; margin:0;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" style="border-radius: 20px; padding: 5px 15px;" onclick="return confirm('Yakin hapus data mata kuliah ini?')">
                                        <i class="fas fa-trash me-1"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-4">
                            <i class="fas fa-inbox fa-2x mb-2 d-block"></i>
                            Belum ada data mata kuliah
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    .card-header-custom {
        background: linear-gradient(135deg, #1e5799 0%, #2ce0b3 100%);
        color: white;
        padding: 18px 24px;
        font-weight: 600;
        font-size: 1.1rem;
    }
    .card-table {
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 30px rgba(0,0,0,0.08);
        border: none;
    }
    .table thead th {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        font-weight: 600;
        padding: 14px 12px;
        border: none;
        font-size: 14px;
        text-align: center;
    }
    .table tbody td {
        padding: 12px;
        vertical-align: middle;
        border-bottom: 1px solid #e9ecef;
    }
    .table tbody tr:hover {
        background: #f8f9fa;
    }
    .btn-info, .btn-warning, .btn-danger {
        transition: all 0.2s ease;
    }
    .btn-info:hover, .btn-warning:hover, .btn-danger:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    }
    .badge {
        font-size: 13px;
        font-weight: 500;
    }
    .gap-2 {
        gap: 8px;
    }
</style>
@endsection