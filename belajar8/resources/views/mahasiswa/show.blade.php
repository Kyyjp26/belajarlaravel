<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biodata {{ $mahasiswa->nama }}</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="pt-3 d-flex justify-content-between align-items-center">
                    <h1 class="h2">Biodata {{ $mahasiswa->nama }}</h1>

                    <div class="d-flex">
                        <a href="{{ route('mahasiswas.edit', ['mahasiswa' => $mahasiswa->id]) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('mahasiswas.destroy', ['mahasiswa' => $mahasiswa->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger ms-3">Hapus</button>
                        </form>
                    </div>
                </div>
                <hr>

                @if (session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session()->get('pesan') }}
                    </div>
                @endif

                <ul>
                    <li>NIM: {{ $mahasiswa->nim }}</li>
                    <li>Nama: {{ $mahasiswa->nama }}</li>
                    <li>Jenis Kelamin: {{ $mahasiswa->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-Laki' }}</li>
                    <li>Jurusan: {{ $mahasiswa->jurusan }}</li>
                    <li>Alamat {{ $mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat }}</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
