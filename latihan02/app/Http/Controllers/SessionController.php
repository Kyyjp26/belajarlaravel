<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index()
    {
        return view('sesi.index');
    }
    function login(Request $request)
    {
        Session::flash('error', 'Username dan password yang dimasukkan tidak valid!');
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6'
        ], [
            'email.required' => 'Email wajib di isi!',
            'password.required' => 'Password wajib di isi!',
            'password.min' => 'Password minimal harus 6 karakter!'
        ]);

        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infoLogin)) {
            return redirect()->route('bank.home')->with('success', 'Berhasil Login');
        } else {
            return redirect('sesi');
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('sesi')->with('success', 'Berhasil Logout!');
    }
    function register()
    {
        return view('sesi.register');
    }
    function create(Request $request, Bank $bank)
    {
        Session::flash('error', 'Nama, email, dan password harus diisi!');
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ], [
            'name.required' => 'Name wajib di isi!',
            'email.required' => 'Email wajib di isi!',
            'email.email' => 'Email yang dimasukkan tidak valid!',
            'email.unique' => 'Email sudah pernah digunakan, silahkan masukkan email yang lain!',
            'password.required' => 'Password wajib di isi!',
            'password.min' => 'Password minimal harus 6 karakter!'
        ]);

        $bank = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($bank);

        $infoLogin = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infoLogin)) {
            return redirect()->route('bank.home')->with('success', Auth::user()->name . ' Berhasil Login');
        } else {
            return redirect('sesi');
        }
    }
}
