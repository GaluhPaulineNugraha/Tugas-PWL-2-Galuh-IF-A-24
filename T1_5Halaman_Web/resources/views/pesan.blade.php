<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Pesan</title>

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

input, textarea {
    background:#1f1f1f !important;
    border:none !important;
    color:white !important;
}

.btn-gold {
    background:#d4af37;
    color:black;
    border:none;
}
</style>
</head>

<body>

<nav class="navbar">
    <span class="navbar-brand text-white">MyApp</span>
    <div>
        <a href="/beranda" class="nav-link d-inline">Beranda</a>
        <a href="/menu" class="nav-link d-inline">Menu</a>
        <a href="/tentang" class="nav-link d-inline">Tentang</a>
        <a href="/staff" class="nav-link d-inline">Staff</a>
        <a href="/pesan" class="nav-link d-inline active">Pesan</a>
    </div>
</nav>

<div class="container mt-5">
    <h2 style="color:#d4af37;">Kirim Pesan</h2>

    <form>
        <input type="text" class="form-control mb-3" placeholder="Nama">
        <textarea class="form-control mb-3" placeholder="Pesan"></textarea>
        <button class="btn btn-gold">Kirim</button>
    </form>
</div>

</body>
</html>