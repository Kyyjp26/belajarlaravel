<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Infomasi Mahasiswa</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="{{ url('/daftar-mahasiswa') }}" class="nav-link">Daftar Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/tabel-mahasiswa') }}" class="nav-link">Tabel Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/blog-mahasiswa') }}" class="nav-link">Blog Mahasiswa</a>
                    </li>
                </ul>
                <ul class="navbar-nav mt-2 mt-md-0">
                    <li class="nav-item">
                        <span class="text-light">Hello, {{ session('username') }}</span>
                        <a href="{{ url('/logout') }}" class="nav-link d-inline">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2 class="text-center my-4">{{ $judul }}</h2>
        <hr>
    </div>

    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
