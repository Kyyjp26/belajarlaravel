<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route Normal
Route::get('/', function () {
    return view('welcome');
});

// Route Parameter
Route::get('/murid/{nama}', function ($nama) {
    return "Tampilkan data mahasiswa bernama $nama";
});

Route::get('/stok_barang/{jenis}/{merek}', function ($jenis,$merek) {
    return "Cek sisa stok untuk $jenis $merek";
});

// Route Opsional Parameter
Route::get('/stok_barang/{jenis?}/{merek?}', 
    function ($a = 'laptop', $b = 'asus') {
    return "Cek sisa stok untuk $a $b";
});

// Route Parameter Regular Expression
Route::get('/{nama}/{id}', function ($nama, $id) {
    return "tampiklan $nama dengan id = $id";
})->where('id', '[A-Z]{2}[0-9]+');

// Route Redirect
Route::get('/telpon-akuh', function () {
    return "hubungi akuh";
});

Route::redirect('/contact-us', '/telpon-akuh');

// Route Group
Route::prefix('/admin')->group(function () {

    Route::get('/guru', function () {
        echo "<h1>Daftar guru</h1>";
    });

    Route::get('/murid', function () {
        echo "<h1>Daftar murid</h1>";
    });

    Route::get('/ortu', function () {
        echo "<h1>Daftar ortu</h1>";
    });

});

// Route Fallback
Route::fallback(function() {
    return "Tidak kamu salah link";
});

// Route Priority
Route::get('/link/{a}', function ($a) {
    return "Link ke-$a";
});

Route::get('/link/{b}', function ($b) {
    return "Link ke-$b";
});

Route::get('/link/{c}', function ($c) {
    return "Link ke-$c";
});


// Debugging 
Route::get('/hello', function () {
    $hello = 'Hello Word';
    dd($hello);

    return $hello;
});


// View
// Route::get('/belajar', function () {
//     $arrMahasiswa = ["Budi"];

//     return view('belajar')->with('mahasiswa' , $arrMahasiswa);
// });

Route::get('/belajar', function () {
    $arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo","Lisa Permata"];

    return view('belajar')->with('mahasiswa', $arrMahasiswa);
});

// Pengulangan PHP
Route::get('/mahasiswa', function () {
    $nama = 'Razka Analisa';
    $nilai = 100;

    return view('mahasiswa', compact('nama', 'nilai'));
});

// Perintah Continue & Break
Route::get('/mahasiswa/1', function () {
    $nama = 'Rizka Putra';
    $nilai = [80,50,40,90,85];

    return view('mahasiswa1', compact('nama', 'nilai'));
});

// Merancang Layout
route::get('/siswa', function () {
    $arrSiswa = ["Asep Pudin", "Budi Pratama", "Ucup Baba", "Yatno Ardiansyah"];

    return view('siswa')->with('siswa', $arrSiswa);
})->name('siswa');

Route::get('/dosen', function () {
    $arrDoesen = ["Bunda Primaya M.M", "Prof. Bayu Ardi", "Dr. Dapiansyah", "Pebri Asep S.Kom."];

    return view('dosen')->with('dosen', $arrDoesen);
})->name('dosen');

Route::get('/kenangan/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/informasi/{fakultas}/{jurusan}', function ($fakultas, $jurusan) {
    $data = [$fakultas, $jurusan];
    return view('informasi')->with('data', $data);
})->name('info');

// Components & Slots
Route::get('admin', function () {
    return view('admin');
});