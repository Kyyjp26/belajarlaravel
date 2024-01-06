<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index()
    {
        echo "<ul>";
        echo "<li><a href='/buat-session'>Buat Session</a></li>";
        echo "<li><a href='/akses-session'>Akses Session</a></li>";
        echo "<li><a href='/hapus-session'>Hapus Session</a></li>";
        echo "<li><a href='/flash-session'>Flash Session</a></li>";
        echo "</ul>";
    }
    function buatSession()
    {
        session(['hakAkses'=> 'admin', 'nama' => 'Anto']);
        return "Session sudah di buat";
    }
    function aksesSession(Request $request)
    {
        echo session('hakAkses');
        echo session('nama');
        echo "<hr>";

        echo $request->session()->get('hakAkses');
        echo $request->session()->get('nama');
        echo "<hr>";

        echo Session::get('hakAkses');
        echo Session::get('nama');
        echo "<hr>";

        dump(session()->all());

        $isiSession = $request->session()->get('kota', 'Jakarta');
        echo "Isi session adalah $isiSession";
        echo "<hr>";

        if (session()->has('hakAkses')) {
            echo "Session 'hakAkses' terdeteksi: ".session('hakAkses');
        }
    }
    function hapusSession(Request $request)
    {
        session()->forget('hakAkses');
        $request->session()->forget('hakAkses');
        Session::forget('hakAkses');

        echo "Session hakAkses sudah dihapus";
    }
    function flashSession(Request $request)
    {
        session()->flash('hakAkses', 'admin');
        $request->session()->flash('hakAkses', 'admin');
        Session::flash('hakAkses', 'admin');

        echo "Flash session hakAkses sudah di buat";
    }
}
