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
                <ul class="navbar-nav">
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
            </div>
        </div>
    </nav>

    <div class="container">
        <h2 class="my-4">Form Login</h2>
        <hr>

        @if (session()->has('pesan'))
            <div class="alert alert-info w-50">
                {{ session()->get('pesan') }}
            </div>
        @endif

        <form action="{{ url('login') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}">
                @error('username')
                    <div class="text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary my-2">Login</button>
        </form>
    </div>

    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
