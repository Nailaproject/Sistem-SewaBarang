<!DOCTYPE html>
<html>
<head>
<title>Sistem Sewa Barang</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: #f4f9ff;
    margin:0;
    font-family:'Segoe UI', sans-serif;
}

/* ===== TOPBAR ===== */
.topbar{
    position:fixed;
    top:0;
    left:0;
    right:0;
    height:70px;
    background:linear-gradient(135deg, #0d6efd, #6ea8fe);
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:0 30px;
    color:white;
    z-index:1000;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

/* ===== SIDEBAR ===== */
.sidebar{
    width:240px;
    height:100vh;
    position:fixed;
    top:70px;
    left:0;
    background:#ffffff;
    padding-top:25px;
    box-shadow:2px 0 10px rgba(0,0,0,0.05);
    border-right:1px solid #e3f2fd;
}

/* MENU */
.sidebar a{
    color:#0d6efd;
    display:flex;
    align-items:center;
    gap:10px;
    padding:14px 25px;
    text-decoration:none;
    font-weight:500;
    transition:0.3s;
    border-radius:0 30px 30px 0;
    margin-bottom:5px;
}

/* Hover */
.sidebar a:hover{
    background:#e7f1ff;
    color:#0b5ed7;
    padding-left:30px;
}

/* Active */
.sidebar a.active{
    background:linear-gradient(135deg, #0d6efd, #6ea8fe);
    color:white;
    font-weight:600;
    box-shadow:0 4px 10px rgba(13,110,253,0.2);
}

/* ===== CONTENT ===== */
.content{
    margin-left:240px;
    margin-top:70px;
    min-height:100vh;
    background:#f4f9ff;
}

/* Isi halaman */
.page-content{
    padding:30px;
}

/* Card */
.card-custom{
    border:none;
    border-radius:18px;
    background:white;
    box-shadow:0 4px 15px rgba(0,0,0,0.05);
    transition:0.3s;
}

.card-custom:hover{
    transform:translateY(-4px);
}

/* Judul */
h3,h4,h5{
    color:#0d6efd;
    font-weight:700;
}
</style>
</head>

<body>

<!-- NAVBAR ATAS -->
<div class="topbar">
    <div style="font-weight:600; font-size:20px;">
        SEWA BARANG
    </div>

    <div class="d-flex align-items-center gap-3">
        <span>Halo, {{ auth()->user()->name }}</span>

        <form action="/logout" method="POST" class="m-0">
            @csrf
            <button class="btn btn-sm btn-light">Logout</button>
        </form>
    </div>
</div>

<!-- SIDEBAR -->
<div class="sidebar">

    <a href="/dashboard" class="{{ request()->is('dashboard') ? 'active' : '' }}">Dashboard</a>
    <a href="/barang" class="{{ request()->is('barang') ? 'active' : '' }}">Barang</a>
    <a href="/peminjaman" class="{{ request()->is('peminjaman') ? 'active' : '' }}">Transaksi Sewa</a>
    <a href="/pengembalian" class="{{ request()->is('pengembalian') ? 'active' : '' }}">Pengembalian</a>

</div>

<!-- CONTENT -->
<div class="content">
    <div class="page-content">
        @yield('content')
    </div>
</div>

</body>
</html>