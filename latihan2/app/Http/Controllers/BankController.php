<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BankController extends Controller
{
    public function home()
    {
        return view('bank.home');
    }
    public function index()
    {
        $banks = Bank::all();
        return view('bank.index', ['banks' => $banks]);
    }

    public function create()
    {
        return view('bank.create');
    }

    public function store(Request $request)
    {
        Session::flash('nama', $request->nama);
        Session::flash('jenis_bank', $request->jenis_bank);
        Session::flash('nominal', $request->nominal);
        $validateData = $request->validate([
            'nama' => 'required',
            'jenis_bank' => 'required',
            'nominal' => 'required|min:4|integer'
        ],[
            'nama.required' => 'Nama wajib di isi!',
            'jenis_bank.required' => 'Jenis bank wajib di isi!',
            'nominal.required' => 'Nominal wajib di isi!',
            'nominal.min' => 'Nominal uang harus berisi 4 karakter!',
            'nominal.integer' => 'Nominal uang harus berupa angka!',
        ]);

        Bank::create($validateData);

        return redirect()->route('bank.index')->with('success', "Penambahan data {$validateData['nama']} berhasil!");
    }

    public function edit(Bank $bank)
    {
        return view('bank.edit', ['bank' => $bank]);
    }

    public function update(Request $request, Bank $bank)
    {
        $validateData = $request->validate([
            'nama' => 'required|min:3|max:50',
            'jenis_bank' => 'required|min:3',
            'nominal' => 'required|min:4|integer'
        ],[
            'nama.required' => 'Nama wajib di isi!',
            'nama.min' => 'Nama harus berisi minimal 3 karakter!',
            'nama.max' => 'Nama berisi maxsimal 50 karakter!',
            'jenis_bank.required' => 'Jenis bank wajib di isi!',
            'jenis_bank.min' => 'Jenis bank harus berisi minimal 3 karakter!',
            'nominal.required' => 'Nominal wajib di isi!',
            'nominal.min' => 'Nominal uang harus berisi 4 karakter!',
            'nominal.integer' => 'Nominal uang harus berupa angka!',
        ]);

        $bank->update($validateData);
        return redirect()->route('bank.index')->with('success', "Pembaruan data {$validateData['nama']} berhasil!");
    }

    public function destroy(Bank $bank)
    {
        $bank->delete();
        return redirect()->route('bank.index')->with('success', "Penghapusan data $bank->nama berhasil!");
    }
}
