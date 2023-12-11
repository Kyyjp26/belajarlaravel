<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function siswa()
    {
        return view('siswa');
    }
    function index()
    {
        return view('sesi/index');
    }
    function login(Request $request)
    {
        Session::flash('error', 'Username Dan Password Yang Dimasukkan Tidak Valid');
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Email Wajib Di Isi',
            'password.required' => 'Password Wajib Di Isi'
        ]);

        $infologin = [
            'email' => $request-> email,
            'password' => $request-> password,
        ];

        if (Auth::attempt($infologin)){
            return view('siswa')->with('success', 'Berhasil Login');
        } else {
            return redirect('sesi');
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('sesi')->with('success', 'Berhasil Logout');
    }
    function register()
    {
        return view('sesi/register');
    }
    function create(Request $request)
    {
        Session::flash('error', 'Nama, Username, Dan Password Harap Diisi!');
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ],[
            'name.required' => 'Nama Wajib Di Isi',
            'email.required' => 'Email Wajib Di Isi',
            'email.email' => 'Silakan Masukkan Email Yang Valid',
            'email.unique' => 'Email Sudah Pernah Digunakan, Silakan Pilih Email Yang Lain',
            'password.required' => 'Password Wajib Di Isi',
            'password.min' => 'Minimum Password Yang Diizinkan Adalah 6 Karakter'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);

        $infologin = [
            'name' => $request-> name,
            'email' => $request-> email,
            'password' => $request-> password,
        ];

        if (Auth::attempt($infologin)){
            return view('siswa')->with('success', Auth::user()->name . 'Berhasil Login');
        } else {
            return redirect('sesi');
        }
    }
}
