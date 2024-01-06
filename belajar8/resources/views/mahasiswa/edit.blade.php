<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Edit Mahasiswa</h1>
                <hr>

                <form action="{{ route('mahasiswas.update', ['mahasiswa' => $mahasiswa->id]) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" id="nim" name="nim" value="{{ old('nim') ?? $mahasiswa->nim }}" class="form-control @error('nim') is-invalid @enderror">
                        @error('nim')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" value="{{ old('nama') ?? $mahasiswa->nama }}" class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <div class="d-flex">
                            <div class="form-check me-3">
                                <input type="radio" class="form-check-input" name="jenis_kelamin" id="laki-laki" value="L" {{ (old('jenis_kelamin') ?? $mahasiswa->jenis_kelamin)=='L' ? 'checked': '' }}>
                                <label for="laki-laki" class="form-check-label">Laki-Laki</label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="form-check me-3">
                                <input type="radio" class="form-check-input" name="jenis_kelamin" id="perempuan" value="P" {{ (old('jenis_kelamin') ?? $mahasiswa->jenis_kelamin)=='P' ? 'checked': '' }}>
                                <label for="perempuan" class="form-check-label">Perempuan</label>
                            </div>
                        </div>
                        @error('jenis_kelamin')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-select" value="{{ old('jurusan') }}">
                            <option value="Teknik Informatika" {{ (old('jurusan') ?? $mahasiswa->jurusan)=='Teknik Informatika' ? 'selected': '' }}>Teknik Informatika</option>
                            <option value="Sistem Informasi" {{ (old('jurusan') ?? $mahasiswa->jurusan)=='Sistem Informasi' ? 'selected': '' }}>Sistem Informasi</option>
                            <option value="Ilmu Komputer" {{ (old('jurusan') ?? $mahasiswa->jurusan)=='Ilmu Komputer' ? 'selected': 'Ilmu Komputer' }}>Ilmu Komputer</option>
                            <option value="Teknik Komputer" {{ (old('jurusan') ?? $mahasiswa->jurusan)=='Teknik Komputer' ? 'selected': 'Teknik Komputer' }}>Teknik Komputer</option>
                            <option value="Teknik Telekomunikasi" {{ (old('jurusan') ?? $mahasiswa->jurusan)=='Teknik Telekomunikasi' ? 'selected': '' }}>Teknik Telekomunikasi</option>
                        </select>
                        @error('jurusan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="3" class="form-control">{{ old('alamat') ?? $mahasiswa->alamat }}</textarea>
                    </div>

                    <button class="btn btn-primary mb-2" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
