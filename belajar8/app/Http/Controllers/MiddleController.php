<?php

namespace App\Http\Controllers;

use Closure;
use Illuminate\Http\Request;

class MiddleController extends Controller
{
    function handle($request, Closure $next)
    {
        if (time() % 2 == 0) {
            return redirect('/tabel-mahasiswa');
        }
        return $next($request);
    }
    function daftarMahasiswa()
    {
        return "Form pendaftaran mahasiswa";
    }
    function tabelMahasiswa()
    {
        return "Table data mahasiswa";
    }
    function blogMahasiswa()
    {
        return "Halaman blog mahasiswa";
    }
}
