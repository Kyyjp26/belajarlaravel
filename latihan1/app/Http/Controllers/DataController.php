<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DataController extends Controller
{
    public function index()
    {
        $data = Data::all();
        return view('data.index', ['data' => $data]);
    }

    public function create()
    {
        return view('data.create');
    }

    public function store(Request $request)
    {
        Session::flash('nama', $request->nama);
        Session::flash('jenis_bank', $request->jenis_bank);
        Session::flash('nominal', $request->nominal);
        $validateData = $request->validate([
            'nama' => 'required|min:3',
            'jenis_bank' => 'required',
            'nominal' => 'required|min:4'
        ], [
            'nama.required' => 'Nama wajib di isi!',
            'jenis_bank.required' => 'Jenis bank wajib di isi!',
            'nominal.required' => 'Nominal uang wajib di isi!',
            'nama.min' => 'Nama minimal memiliki 3 karakter!',
            'nominal.min' => 'Nominal minimal memiliki 4 karakter!'
        ]);

        Data::create($validateData);

        return redirect()->route('data.index')->with('success', "Penambahan data {$validateData['nama']} berhasil");
    }

    public function edit(Data $data)
    {
        return view('data.edit', ['data' => $data]);
    }

    public function update(Request $request, Data $data)
    {
        $validateData = $request->validate([
            'nama' => 'required|min:3|max:50',
            'jenis_bank' => 'required',
            'nominal' => 'required|min:4'
        ], [
            'nama.required' => 'Nama wajib di isi!',
            'jenis_bank.required' => 'Jenis bank wajib di isi!',
            'nominal.required' => 'Nominal uang wajib di isi!',
        ]);

        $data->update($validateData);
        return redirect()->route('data.index')->with('success', "Pembaruan Data {$validateData['nama']} berhasil!");
    }

    public function destroy(Data $data)
    {
        $data->delete();
        return redirect()->route('data.index')->with('success', "Hapus Data $data->nama berhasil!");
    }
}
