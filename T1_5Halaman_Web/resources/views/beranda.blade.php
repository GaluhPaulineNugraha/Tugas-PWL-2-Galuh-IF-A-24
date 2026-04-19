<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Beranda</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
body { background:#121212; color:#f5f5f5; font-family:'Poppins',sans-serif; }

.navbar {
    background:#1f1f1f;
    padding:15px 30px;
}

.navbar-brand { color:white; font-weight:bold; }

.nav-link {
    color:#f5f5f5 !important;
    margin:0 12px;
    font-weight:500;
    transition:0.3s;
}

.nav-link:hover { color:#d4af37 !important; }

.active {
    color:#d4af37 !important;
    border-bottom:2px solid #d4af37;
}

.hero {
    height:80vh;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
}

.hero h1 { color:#d4af37; font-size:50px; }

.btn-gold {
    background:#d4af37;
    color:black;
    border:none;
}

.btn-gold:hover { background:#b8962e; }
</style>
</head>

<body>

<nav class="navbar">
    <span class="navbar-brand">MyApp</span>
    <div>
        <a href="/beranda" class="nav-link d-inline active">Beranda</a>
        <a href="/menu" class="nav-link d-inline">Menu</a>
        <a href="/tentang" class="nav-link d-inline">Tentang</a>
        <a href="/staff" class="nav-link d-inline">Staff</a>
        <a href="/pesan" class="nav-link d-inline">Pesan</a>
    </div>
</nav>

<div class="hero">
    <h1>Selamat Datang</h1>
    <a href="/menu" class="btn btn-gold mt-3">Lihat Menu</a>
</div>

</body>
</html>