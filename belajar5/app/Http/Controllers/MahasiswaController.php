<?php

namespace App\Http\Controllers;

use Dotenv\Parser\Value;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function insertSql()
    {
        $result = DB::insert("INSERT INTO mahasiswas(nim,nama,tanggal_lahir,ipk) VALUES ('19003060','Mr Roblox','2021-10-5',2.0)");
        dump($result);
    }
    public function insertTimestamp()
    {
        $result = DB::insert(
            "INSERT INTO mahasiswas
            (nim,nama,tanggal_lahir,ipk,created_at,updated_at)
            VALUES ('19002023','Ayu Budiman','1980-12-13',3.4,now(),now())");
        dump($result);
    }
    public function insertPrepared()
    {
        $result = DB::insert(
            'INSERT INTO mahasiswas
            (nim,nama,tanggal_lahir,ipk,created_at,updated_at)
            VALUES (:nim,:nama,:tgl,:ipk,:created,:updated)',
            [
                'nim' =>'107080',
                'nama' =>'Asep Agung',
                'tgl' => '2005-11-6',
                'ipk' => 2.2,
                'created' => now(),
                'updated' => now(),
            ]
        );
        dump($result);
    }
    public function insertBinding()
    {
        $result = DB::insert(
            "INSERT INTO mahasiswas
            (nim,nama,tanggal_lahir,ipk,created_at,updated_at)
            VALUES ('120992', 'Yanto Ulung', '2008-07-05',3.2,now(),now())");
        dump($result);
    }
    public function update()
    {
        $result = DB::update(
            'UPDATE mahasiswas SET created_at = now(), updated_at = now(), ipk = 3.3 WHERE nim = ?', [19003060]
        );
        dump($result);
    }
    public function delete()
    {
        $result = DB::delete(
            'DELETE FROM mahasiswas Where nama = ?', ['Ayu Budiman']
        );
        dump($result);
    }
    public function select()
    {
        $result = DB::select('SELECT * FROM mahasiswas');
        dump($result);
    }
    public function selectTampil()
    {
        $result = DB::select('SELECT * FROM mahasiswas');

        echo($result[0]->id). '<br>';
        echo($result[0]->nim). '<br>';
        echo($result[0]->nama). '<br>';
        echo($result[0]->tanggal_lahir). '<br>';
        echo($result[0]->ipk);
    }
    public function selectView()
    {
        $result = DB::select('SELECT * FROM mahasiswas');
        return view('tampil-mahasiswa', ['mahasiswas' => $result]);
    }
    public function selectWhere()
    {
        $result = DB::select(
            'SELECT * FROM mahasiswas WHERE ipk > ? ORDER BY nama ASC', [3]);
        return view('tampil-mahasiswa', ['mahasiswas' => $result]);
    }
    public function statement()
    {
        $result = DB::statement('TRUNCATE mahasiswas');
        return('Tabel Mahasiswa Sudah Kosong');
    }

}
