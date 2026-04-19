<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Menu</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body { background:#121212; color:white; }

.navbar { background:#1f1f1f; padding:15px 30px; }

.navbar-brand { color:white; font-weight:bold; }

.nav-link {
    color:#f5f5f5 !important;
    margin:0 12px;
    font-weight:500;
}

.nav-link:hover { color:#d4af37 !important; }

.active {
    color:#d4af37 !important;
    border-bottom:2px solid #d4af37;
}

.card {
    background:#1f1f1f;
    border:none;
    border-radius:15px;
    transition:0.3s;
}

.card:hover {
    transform:scale(1.05);
    border:1px solid #d4af37;
}

.harga { color:#d4af37; font-weight:bold; }
</style>
</head>

<body>

<nav class="navbar">
    <span class="navbar-brand">MyApp</span>
    <div>
        <a href="/beranda" class="nav-link d-inline">Beranda</a>
        <a href="/menu" class="nav-link d-inline active">Menu</a>
        <a href="/tentang" class="nav-link d-inline">Tentang</a>
        <a href="/staff" class="nav-link d-inline">Staff</a>
        <a href="/pesan" class="nav-link d-inline">Pesan</a>
    </div>
</nav>

<div class="container mt-5">
    <h2 class="text-center mb-4" style="color:#d4af37;">Menu Kami</h2>

    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 text-center">
                <h5>Nasi Goreng</h5>
                <p class="harga">Rp 15.000</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-3 text-center">
                <h5>Mie Ayam</h5>
                <p class="harga">Rp 12.000</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-3 text-center">
                <h5>Es Teh</h5>
                <p class="harga">Rp 5.000</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>