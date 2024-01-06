<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index()
    {
        return view('sesi/index');
    }
    function login(Request $request)
    {
        Session::flash('error', 'Username dan password yang dimasukkan tidak valid!');
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email Wajib Diisi!',
            'password.required' => 'Password Wajib Diisi!'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            return redirect()->route('data.index')->with('success', 'Berhasil Login');
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
        return view('sesi.register');
    }
    function create(Request $request)
    {
        Session::flash('error', 'Nama, email, dan password harap diisi!');
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ], [
            'name.required' => 'Nama Wajib Diisi!',
            'email.required' => 'Email Wajib Diisi!',
            'email.email' => 'Email Yang Di Masukkan Tidak Valid',
            'email.unique' => 'Email Sudah Pernah Digunakan, Silakan Pilih Email Yang Lain',
            'password.required' => 'Password Wajib Diisi!',
            'password.min' => 'Password Yang Di Masukkan Minimal 6 Karakter'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);

        $infologin = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            return redirect()->route('data.index')->with('success', Auth::user()->name . ' Berhasil Login');
        } else {
            return redirect('sesi');
        }
    }
}
