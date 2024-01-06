<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    function daftarMahasiswa(Request $request)
    {
        if (Auth::check()) {
            echo "Selamat Datang, ".$request->user()->name;
        } else {
            echo "Silahkan login terlebih dahulu";
        }

        // return view('halaman', ['judul' => 'Daftar Mahasiswa']);
    }
    function tabelMahasiswa()
    {
        return view('halaman', ['judul' => 'Tabel Mahasiswa']);
    }
    function blogMahasiswa()
    {
        return view('halaman', ['judul' => 'Blog Mahasiswa']);
    }
}
