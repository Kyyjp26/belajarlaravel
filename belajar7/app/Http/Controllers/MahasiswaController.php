<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function cekObject()
    {
        $mahasiswa = new Mahasiswa;
        dump($mahasiswa);
    }
    public function insert()
    {
        $mahasiswa = new Mahasiswa;

        $mahasiswa->nim = '1298479';
        $mahasiswa->nama = 'Budi Santoso';
        $mahasiswa->tanggal_lahir = '2007-10-07';
        $mahasiswa->ipk = '3.0';
        $mahasiswa->save();

        dump($mahasiswa);
    }
    public function massAssignment()
    {
        Mahasiswa::create(
            [
                'nim' => '1785038',
                'nama' => 'Asep Budiman',
                'tanggal_lahir' => '2008-08-15',
                'ipk' => 2.5,
            ]
        );

        return "Berhasil di proses";
    }
    public function massAssignment2()
    {
        $mahasiswa1 = Mahasiswa::create(
            [
                'nim' => '128786',
                'nama' => 'Guntur Ruba',
                'tanggal_lahir' => '2014-10-19',
                'ipk' => 3.4,
            ]
        );
        dump($mahasiswa1);

        $mahasiswa2 = Mahasiswa::create(
            [
                'nim' => '371631',
                'nama' => 'Rina Suci',
                'tanggal_lahir' => '2004-01-28',
                'ipk' => 2.7,
            ]
        );
        dump($mahasiswa2);

        $mahasiswa3 = Mahasiswa::create(
            [
                'nim' => '983713',
                'nama' => 'Siga Umar',
                'tanggal_lahir' => '2001-02-20',
                'ipk' => 2.9,
            ]
        );
        dump($mahasiswa3);
    }
    public function update()
    {
        $mahasiswa = Mahasiswa::find(3);
        $mahasiswa->tanggal_lahir = '2005-12-23';
        $mahasiswa->ipk = 2.9;
        $mahasiswa->save();

        dump($mahasiswa);
    }
    public function updateWhere()
    {
        $mahasiswa = Mahasiswa::where('nim', '128786')->first();
        $mahasiswa->tanggal_lahir = '2010-07-03';
        $mahasiswa->ipk = '4.0';
        $mahasiswa->save();

        dump($mahasiswa);
    }
    public function massUpdate()
    {
        Mahasiswa::where('nim', '128786')->first()->update([
            'tanggal_lahir' => '2008-03-14',
            'ipk' => 2.1,
        ]);
        return "Berhasil di proses";
    }
    public function delete()
    {
        $mahasiswa = Mahasiswa::find(3);
        $mahasiswa->delete();

        dump($mahasiswa);
    }
    public function destroy()
    {
        $mahasiswa = Mahasiswa::destroy(3);
        dump($mahasiswa);
    }
    public function massDelete()
    {
        $mahasiswa = Mahasiswa::where('ipk', '>', 2)->delete();
        dump($mahasiswa);
    }
    public function all()
    {
        $result = Mahasiswa::all();

        foreach ($result as $mahasiswa) {
            echo($mahasiswa->id). '<br>';
            echo($mahasiswa->nim). '<br>';
            echo($mahasiswa->nama). '<br>';
            echo($mahasiswa->tanggal_lahir). '<br>';
            echo($mahasiswa->ipk). '<br>';
            echo '<hr>';
        }
    }
    public function allView()
    {
        $mahasiswas = Mahasiswa::all();
        return view('tampil-mahasiswa', ['mahasiswas' => $mahasiswas]);
    }
    public function getWhere()
    {
        $mahasiswas = Mahasiswa::where('ipk','<','3')
        ->orderBy('nama','desc')
        ->get();
        return view('tampil-mahasiswa', ['mahasiswas' => $mahasiswas]);
    }
    public function testWhere()
    {
        $mahasiswa = Mahasiswa::where('nim','1785038')->first();
        dump($mahasiswa);
    }
    public function first()
    {
        $mahasiswa = Mahasiswa::where('ipk','<','3')->first();
        return view('tampil-mahasiswa', ['mahasiswas' => [$mahasiswa]]);
    }
    public function find()
    {
        $mahasiswa = Mahasiswa::find(8);
        return view('tampil-mahasiswa', ['mahasiswas' => [$mahasiswa]]);
    }
    public function latest()
    {
        $mahasiswa = Mahasiswa::latest()->get();
        return view('tampil-mahasiswa', ['mahasiswas' => $mahasiswa]);
    }
    public function limit()
    {
        $mahasiswa = Mahasiswa::latest()->limit(3)->get();
        return view('tampil-mahasiswa',['mahasiswas' => $mahasiswa]);
    }
    public function skipTake()
    {
        $mahasiswa = Mahasiswa::orderBy('ipk')->skip(1)->take(3)->get();
        return view('tampil-mahasiswa',['mahasiswas' => $mahasiswa]);
    }
    public function softDelete()
    {
        $mahasiswa = Mahasiswa::where('nim','1785038')->delete();
        return 'Berhasil Di Hapus';
    }
    public function withTrashed()
    {
        $mahasiswa = Mahasiswa::withTrashed()->get();
        return view('tampil-mahasiswa', ['mahasiswas' => $mahasiswa]);
    }
    public function restore()
    {
        $mahasiswa = Mahasiswa::where('nim','1785038')->restore();
        return 'Berhasil Di Restore';
    }
    public function forceDelete()
    {
        $mahasiswa = Mahasiswa::where('nim','983713')->forceDelete();
        return 'Berhasil Di Hapuse Secara Permanen';
    }
}
