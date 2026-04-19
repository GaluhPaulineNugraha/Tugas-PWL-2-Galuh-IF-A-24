<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Tentang</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body { background:#121212; color:white; }

.navbar { background:#1f1f1f; padding:15px 30px; }

.nav-link {
    color:#f5f5f5 !important;
    margin:0 12px;
}

.nav-link:hover { color:#d4af37 !important; }

.active {
    color:#d4af37 !important;
    border-bottom:2px solid #d4af37;
}
</style>
</head>

<body>

<nav class="navbar">
    <span class="navbar-brand text-white">MyApp</span>
    <div>
        <a href="/beranda" class="nav-link d-inline">Beranda</a>
        <a href="/menu" class="nav-link d-inline">Menu</a>
        <a href="/tentang" class="nav-link d-inline active">Tentang</a>
        <a href="/staff" class="nav-link d-inline">Staff</a>
        <a href="/pesan" class="nav-link d-inline">Pesan</a>
    </div>
</nav>

<div class="container mt-5">
    <h2 style="color:#d4af37;">Tentang Kami</h2>
    <p>Website ini dibuat untuk emngenalkan produk kami</p>
</div>

</body>
</html>