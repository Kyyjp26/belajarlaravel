<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-4 d-flex justify-content-between align-items-center">
                    <h2>Tabel Mahasiswa</h2>
                    <a href="{{ route('mahasiswas.create')}}" class="btn btn-primary">Tambah Data</a>
                </div>

                @if (session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session()->get('pesan') }}
                    </div>
                @endif

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                            <th>Lihat Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mahasiswas as $mahasiswa)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <th>{{ $mahasiswa->nim }}</th>
                                <th>{{ $mahasiswa->nama }}</th>
                                <th>{{ $mahasiswa->jenis_kelamin =='P' ? 'Perempuan':'Laki-Laki' }}</th>
                                <th>{{ $mahasiswa->jurusan }}</th>
                                <th>{{ $mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat }}</th>
                                <th>
                                    <a href={{ route('mahasiswas.show', ['mahasiswa' => $mahasiswa->id]) }}>Lihat</a>
                                </th>
                            </tr>
                        @empty
                            <td colspan="6" class="text-center">Tidak Ada Data...</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
