<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    function daftarMahasiswa()
    {
        return view('halaman', ['judul' => 'Daftar Mahasiswa']);
    }
    function tabelMahasiswa()
    {
        return view('halaman', ['judul' => 'Tabel Mahasiswa']);
    }
    function blogMahasiswa()
    {
        return view('halaman', ['judul' => 'Blog Mahasiswa']);
    }
    function login()
    {
        return view('form-login');
    }
    function prosesLogin(Request $request)
    {
        $request->validate([
            'username' => 'required'
        ]);

        $validUsername = ['andi','rani', 'lisa',' joko'];

        if (in_array($request->username, $validUsername)) {
            session(['username' => $request->username]);
            return redirect('/daftar-mahasiswa');
        } else {
            return back()->withInput()->with('pesan', "Username tidak valid!");
        }
    }
    function logout()
    {
        session()->forget('username');
        return redirect('login')->with('pesan', 'Logout berhasil');
    }

}
