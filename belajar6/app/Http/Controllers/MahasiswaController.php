<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function insert()
    {
        $result = DB::table('mahasiswas')->insert(
            [
                'nim' => '1209210',
                'nama' => 'Abdul Rahid',
                'tanggal_lahir' => '2004-09-03',
                'ipk' => 3.0,
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($result);
    }
    public function insertBanyak()
    {
        $result = DB::table('mahasiswas')->insert(
            [
                [
                    'nim' => '1298205',
                    'nama' => 'Husen Ahmad',
                    'tanggal_lahir' => '2005-05-08',
                    'ipk' => 3.1,
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'nim' => '389128',
                    'nama' => 'Farid Nanda',
                    'tanggal_lahir' => '2003-10-06',
                    'ipk' => 2.8,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );
        dump($result);
    }
    public function update()
    {
        $result = DB::table('mahasiswas')
        ->where('nama', 'Abdul Rahid')
        ->update(
            [
                'tanggal_lahir' => '2007-07-02',
                'ipk' => '3.18',
                'updated_at' => now()
            ]
        );
        dump($result);
    }
    public function updateWhere()
    {
        $result = DB::table('mahasiswas')
        ->where('ipk','<',3)
        ->where('nama', '<>', 'Alex')
        ->update(
            [
                'tanggal_lahir' => '2000-01-01',
                'updated_at' => now()
            ]
        );
        dump($result);
    }
    public function updateOrInsert()
    {
        $result = DB::table('mahasiswas')->updateOrInsert(
            [
                'nim' => '2017421'
            ],
            [
                'nama' => 'Agus Salim',
                'tanggal_lahir' => '2002-10-14',
                'ipk' => 2.1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($result);
    }
    public function delete()
    {
        $result = DB::table('mahasiswas')
        ->where('ipk', '>=', 3.1)
        ->delete();
        dump($result);
    }
    public function get()
    {
        $result = DB::table('mahasiswas')->get();
        dump($result);
    }
    public function getTampil()
    {
        $result = DB::table('mahasiswas')->get();

        echo($result[0]->id). '<br>';
        echo($result[0]->nim). '<br>';
        echo($result[0]->nama). '<br>';
        echo($result[0]->tanggal_lahir). '<br>';
        echo($result[0]->ipk);
    }
    public function getView()
    {
        $result = DB::table('mahasiswas')->get();
        return view('tampil-mahasiswa', ['mahasiswas' => $result]);
    }
    public function getWhere()
    {
        $result = DB::table('mahasiswas')
        ->where('ipk', '<', 2.7)
        ->orderBy('nama', 'desc')
        ->get();
        return view('tampil-mahasiswa', ['mahasiswas' => $result]);
    }
    public function select()
    {
        $result = DB::table('mahasiswas')
        ->select('nim', 'nama as nama_mahasiswa')
        ->get();
        dump($result);
    }
    public function take()
    {
        $result = DB::table('mahasiswas')
        ->orderBy('nama', 'asc')->skip(1)->take(2)->get();
        return view('tampil-mahasiswa', ['mahasiswas' => $result]);
    }
    public function first()
    {
        $result = DB::table('mahasiswas')
        ->where('nama', 'Agus Salim')->first();
        return view('tampil-mahasiswa', ['mahasiswas' => [$result]]);
    }
    public function find()
    {
        $result = DB::table('mahasiswas')->find(3);
        return view('tampil-mahasiswa', ['mahasiswas' => [$result]]);
    }
    public function raw()
    {
        $result = DB::table('mahasiswas')
        ->selectRaw('count(*) as total_mahasiswa')
        ->get();

        echo($result[0]->total_mahasiswa). '<br>';
    }

    public function index()
    {
        $result = DB::table('mahasiswas')->select('nim','nama')->get();
        return view('index-mahasiswa', ['mahasiswas' => $result]);
    }
    public function mahasiswa($nim)
    {
        $result = DB::table('mahasiswas')->where('nim', $nim)->get();
        return view('tampil-mahasiswa', ['mahasiswas' => $result]);
    }
}
