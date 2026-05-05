<!DOCTYPE html>
<html>
<head>
    <title>SIAKAD - Sistem Informasi Akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #1e5799 0%, #2ce0b3 100%);
            --secondary-gradient: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            --table-header: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background: #f0f2f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        /* Main content wrapper - push footer to bottom */
        .main-content {
            flex: 1;
        }
        
        .navbar-custom {
            background: var(--secondary-gradient);
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }
        
        .navbar-brand {
            font-weight: 800;
            font-size: 1.6rem;
            letter-spacing: 1px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }
        
        .nav-link-custom {
            transition: all 0.3s ease;
            border-radius: 25px;
            margin: 0 5px;
            font-weight: 500;
        }
        
        .nav-link-custom:hover {
            background: rgba(255,255,255,0.25);
            transform: translateY(-2px);
        }
        
        /* ========== TABLE HEADER MENYATU ========== */
        .table {
            width: 100%;
            margin-bottom: 0;
            border-collapse: separate;
            border-spacing: 0;
        }
        
        .table thead tr {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .table thead th {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            font-weight: 600;
            padding: 14px 12px;
            border: none;
            font-size: 14px;
            letter-spacing: 0.5px;
            text-align: center;
        }
        
        .table thead th:first-child {
            border-top-left-radius: 12px;
        }
        
        .table thead th:last-child {
            border-top-right-radius: 12px;
        }
        
        .table tbody tr {
            transition: all 0.2s ease;
        }
        
        .table tbody tr:hover {
            background: linear-gradient(90deg, #f8f9fa 0%, #fff 100%);
        }
        
        .table tbody td {
            padding: 12px;
            vertical-align: middle;
            border-bottom: 1px solid #e9ecef;
            text-align: center;
        }
        
        .table tbody td:first-child {
            text-align: center;
        }
        
        /* Toast Notification Styles */
        .toast-notif {
            position: fixed;
            top: 90px;
            right: 25px;
            z-index: 9999;
            min-width: 350px;
            animation: slideInRight 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            border-radius: 15px;
            overflow: hidden;
        }
        
        @keyframes slideInRight {
            from {
                transform: translateX(100%) rotate(5deg);
                opacity: 0;
            }
            to {
                transform: translateX(0) rotate(0deg);
                opacity: 1;
            }
        }
        
        @keyframes slideOutRight {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(100%);
                opacity: 0;
            }
        }
        
        .toast-notif.hide {
            animation: slideOutRight 0.3s ease forwards;
        }
        
        .toast-header {
            border-bottom: none;
            font-weight: 600;
        }
        
        .toast-body {
            font-size: 14px;
            padding: 12px 20px;
        }
        
        /* Card Styles */
        .card-table {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0,0,0,0.08);
            border: none;
        }
        
        .card-header-custom {
            background: var(--primary-gradient);
            color: white;
            padding: 18px 24px;
            font-weight: 600;
            font-size: 1.1rem;
        }
        
        .btn-action {
            border-radius: 20px;
            padding: 5px 12px;
            margin: 0 3px;
            transition: all 0.2s;
            font-size: 12px;
        }
        
        .btn-action:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }
        
        .btn-detail {
            background: #17a2b8;
            color: white;
            border: none;
        }
        
        .btn-detail:hover {
            background: #138496;
        }
        
        .badge {
            font-size: 12px;
            font-weight: 500;
            padding: 6px 12px;
            border-radius: 20px;
        }
        
        /* Button Primary Custom untuk Form */
        .btn-primary-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
            padding: 10px;
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .btn-primary-custom:hover {
            background: linear-gradient(135deg, #5a67d8 0%, #6b46a0 100%);
            color: white;
            transform: translateY(-2px);
        }
        
        footer {
            background: var(--secondary-gradient);
            margin-top: 50px;
        }
        
        .table-responsive {
            overflow-x: auto;
        }
        
        /* Form Styles */
        .form-control, .form-select {
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 10px 12px;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
        
        .form-label {
            font-weight: 600;
            margin-bottom: 8px;
            color: #333;
        }
        
        /* Container untuk konten */
        .container-custom {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom sticky-top px-4">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="/">
            <i class="fas fa-university me-2"></i> SIAKAD Plus
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link text-white nav-link-custom px-3" href="/dosen">
                        <i class="fas fa-chalkboard-user me-2"></i> Dosen
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white nav-link-custom px-3" href="/mahasiswa">
                        <i class="fas fa-user-graduate me-2"></i> Mahasiswa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white nav-link-custom px-3" href="/matakuliah">
                        <i class="fas fa-book-open me-2"></i> Matakuliah
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white nav-link-custom px-3" href="/jadwal">
                        <i class="fas fa-calendar-week me-2"></i> Jadwal
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white nav-link-custom px-3" href="/krs">
                        <i class="fas fa-clipboard-list me-2"></i> KRS
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content Wrapper -->
<div class="main-content">
    <div class="container mt-4">
        @yield('content')
    </div>
</div>

<footer class="text-white text-center py-4 mt-5">
    <div class="container">
        <small>
            <i class="fas fa-copyright me-1"></i> {{ date('Y') }} SIAKAD Plus 
            <span class="mx-2">|</span> 
            <i class="fas fa-chart-line me-1"></i> Sistem Informasi Akademik Terintegrasi
            <span class="mx-2">|</span>
            <i class="fas fa-code-branch me-1"></i> Version 2.0
        </small>
    </div>
</footer>

<!-- Toast Notification Component -->
@if(session('success') || session('info') || session('error'))
<div class="toast-notif" id="liveToast">
    <div class="toast-header bg-{{ session('success') ? 'success' : (session('error') ? 'danger' : 'info') }} text-white">
        <i class="fas fa-{{ session('success') ? 'check-circle fa-fw' : (session('error') ? 'exclamation-triangle fa-fw' : 'info-circle fa-fw') }} me-2 fa-lg"></i>
        <strong class="me-auto">
            {{ session('success') ? 'Sukses!' : (session('error') ? 'Terhapus!' : 'Telah Diupdate!') }}
        </strong>
        <small>baru saja</small>
        <button type="button" class="btn-close btn-close-white ms-2" data-bs-dismiss="toast"></button>
    </div>
    <div class="toast-body bg-white">
        <i class="fas fa-bell me-2 text-muted"></i> 
        {{ session('success') ?? session('info') ?? session('error') }}
    </div>
</div>
@endif

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Auto hide toast notification after 3 seconds
    document.addEventListener('DOMContentLoaded', function() {
        const toast = document.getElementById('liveToast');
        if (toast) {
            setTimeout(function() {
                toast.classList.add('hide');
                setTimeout(function() {
                    toast.remove();
                }, 300);
            }, 3000);
        }
    });
</script>
</body>
</html>