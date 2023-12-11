<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <title>Form Registrasi</title>
</head>
<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Pendaftaran Mahasiswa</h1>
                <hr>

                <form action="{{ url('/proses-form-request') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ old('nim') }}">
                        @error('nim')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <div class="d-flex">
                            <div class="form-check me-3">
                                <input type="radio" class="form-check-input" name="jenis_kelamin" id="laki_laki" value="L" @checked(old('jenis_kelamin')=='L')>
                                <label for="laki_laki" class="form-check-label">Laki-Laki</label>
                            </div>
                            <div class="form-check me-3">
                                <input type="radio" class="form-check-input" name="jenis_kelamin" id="perempuan" value="P" @checked(old('jenis_kelamin')=='P')>
                                <label for="perempuan" class="form-check-label">Perempuan</label>
                            </div>
                        </div>
                        @error('jenis_kelamin')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-select">
                            <option value="Teknik Informatika" @selected(old('jurusan')=='Teknik Informatika')>Teknik Informatika</option>
                            <option value="Sistem Informasi" @selected(old('jurusan')=='Sistem Informasi')>Sistem Informasi</option>
                            <option value="Ilmu Komputer" @selected(old('jurusan')==' Ilmu Komputer')>Ilmu Komputer</option>
                            <option value="Teknik Komputer" @selected(old('jurusan')=='Teknik Komputer')>Teknik Komputer</option>
                            <option value="Teknik Telekomunikasi" @selected(old('jurusan') == 'Teknik Telekomunikasi')>Teknik Telekomunikasi</option>
                        </select>
                        @error('jurusan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="3" class="form-control">{{ old('alamat') }}</textarea>
                    </div>

                    <button class="btn btn-primary" type="submit">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
