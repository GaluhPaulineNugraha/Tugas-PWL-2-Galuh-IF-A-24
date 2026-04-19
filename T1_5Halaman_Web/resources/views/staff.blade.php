<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Staff</title>

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

.staff-card {
    background:#1f1f1f;
    padding:20px;
    border-radius:15px;
    transition:0.3s;
}

.staff-card:hover {
    border:1px solid #d4af37;
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
        <a href="/staff" class="nav-link d-inline active">Staff</a>
        <a href="/pesan" class="nav-link d-inline">Pesan</a>
    </div>
</nav>

<div class="container mt-5 text-center">
    <h2 style="color:#d4af37;">Tim Kami</h2>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="staff-card">
                <h5>Galuh</h5>
                <p>Developer</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="staff-card">
                <h5>Budi</h5>
                <p>Designer</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="staff-card">
                <h5>Siti</h5>
                <p>Admin</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>