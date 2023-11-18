<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Sistem Informasi Mahasiswa')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="navbar-item">
                    <a href="{{ route('siswa') }}" class="nav-link @yield('menuSiswa')">Data Siswa</a>
                </li>
                <li class="navbar-item">
                    <a href="{{ route('dosen') }}" class="nav-link @yield('menuDosen')">Data Dosen</a>
                </li>
                <li class="navbar-item">
                    <a href="{{ route('gallery') }}" class="nav-link @yield('menuGallery')">Gallery</a>
                </li>
                <li class="navbar-item">
                    <a href="{{ route('info', ['fakultas' => 'FMIPA', 'jurusan' => 'Matematika']) }}" class="nav-link @yield('menuInfo')">Info</a>
                </li>
            </ul>
        </div>
    </nav>

@section('content')
    <div class="alert alert-primary text-center">Sistem Informasi</div>
@show

    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
            <a href="/informasi/FMIPA/Matematika">Jurusan Matematika</a> Sistem Informasi Mahasiswa | Copyright © {{ date("Y") }} WebKyy
        </div>
    </footer>
</body>
</html>
