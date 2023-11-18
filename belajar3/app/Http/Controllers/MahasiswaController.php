<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function siswa()
    {
        $arrSiswa = ['Dewi Istania','Budi Santoso','Bayu Ibrahim','Asep Penaki'];

        return view('siswa')->with('siswa', $arrSiswa);
    }
    public function dosen()
    {
        $arrDosen = ['Sir Yanto','Daki Apriyanto S.Pd','Mr Roblox','Dewita S.Kom'];

        return view('dosen')->with('dosen', $arrDosen);
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function info($fakultas, $jurusan)
    {
        $data = [$fakultas, $jurusan];
        return view('informasi')->with('data', $data);
    }
}
