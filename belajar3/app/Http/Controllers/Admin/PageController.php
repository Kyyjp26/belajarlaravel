<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Http\Controllers\Coba\Foo;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function tampil()
    {
        $arrMahasiswa = ['Aldok Genkming', 'Jatoro Siabul', 'Budi Sontoso', 'Mr Roblox'];

        return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }
    public function cobaFacade()
    {
        echo Str::snake('SenangBelajarLaravel');
        echo "<br>";
        echo Str::kebab('SenangBelajarLaravel');
    }
    public function cobaClass()
    {
        $foo = new Foo();
        echo $foo->bar();
    }
}
?>
