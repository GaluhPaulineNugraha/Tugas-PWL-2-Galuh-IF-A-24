<!DOCTYPE html>
<html>
<head>
    <title>SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
    <a class="navbar-brand">SIAKAD</a>

    <div class="navbar-nav">
        <a href="/dosen" class="nav-link text-white">Dosen</a>
        <a href="/mahasiswa" class="nav-link text-white">Mahasiswa</a>
        <a href="/matakuliah" class="nav-link text-white">Matakuliah</a>
        <a href="/jadwal" class="nav-link text-white">Jadwal</a>
        <a href="/krs" class="nav-link text-white">KRS</a>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<footer class="bg-dark text-white text-center p-2 mt-5">
    © SIAKAD 2026
</footer>

</body>
</html>