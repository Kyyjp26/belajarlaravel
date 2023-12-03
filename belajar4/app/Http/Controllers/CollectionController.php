<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use stdClass;

class CollectionController extends Controller
{
    public function collectionSatu()
    {
        $collection = collect([1,4,6,3,7,3,4]);

        echo $collection[0]; echo "<br>";
        echo $collection[2]; echo "<br>";

        foreach ($collection as $val) {
            echo "$val";
        }
    }
    public function collectionDua()
    {
        $varA = collect([1,2,3]);
        $varB = collect(["1" => 1,"2" => 2,"3" => 3]);

        echo "$varA";
        echo "<br>";
        echo "$varB";
    }
    public function collectionTiga()
    {
        $collection = collect([1,5,8,4,8,3,5,6]);

        // Method sum,avg,max,min,median
        dump( $collection->sum() );
        dump( $collection->avg() );
        dump( $collection->max() );
        dump( $collection->min() );
        dump( $collection->median() );

        // Method random
        dump( $collection->random() );

        // Menthod concat
        echo $collection->concat([10,23,67]);

        // Method contains
        dump( $collection->contains(3) );
        dump( $collection->contains(7) );

        // Method unique
        echo $collection->unique();

        // Method all
        dump( $collection->all() );

        // Method first & last
        dump( $collection->first() );
        dump( $collection->last() );

        // Method count
        dump( $collection->count() );

        // Method sort
        echo $collection->sort();
    }
    public function collectionEmpat()
    {
        $collection = collect([
            "nama" => "Mr Roblox",
            "sekolah" => "SMK 1 Batam",
            "kota" => "batam",
            "jurusan" => "TKJ",
        ]);

        // Method get
        dump( $collection->get('sekolah'));
        dump( $collection->get('umur',17));

        // Method has
        dump( $collection->has('kota') );
        dump( $collection->has('umur') );

        // Method replace
        $hasil = $collection->replace([
            "nama" => "Gorlok",
            "jurusan" => "Mesin",
        ]);

        dump( $hasil );

        // Method forget
        dump( $collection->forget('sekolah') );

        // Method flip
        dump( $collection->flip() );

        // Method keys & values
        dump( $collection->keys() );
        dump( $collection->values() );

        // Method search
        dump( $collection->search('TKJ') );

        // Method each
        foreach ($collection as $keys => $val) {
            echo "$keys : $val <br>";
        }

    }
    public function collectionLima()
    {
        $collection = collect([
            ['namaProduk' => 'Laptop A', 'harga' => 8900000],
            ['namaProduk' => 'Smarthphone B', 'harga' => 790000],
            ['namaProduk' => 'Tablet C', 'harga' => 90000],
        ]);

        // Method sortBy & sortByDesc
        dump( $collection->sortBy('harga')->all() );

        $collection->sortBy('harga')->each(function($val, $key) {
            echo $val['namaProduk']. "<br>";
        });

        // Method filter
        $hasil = $collection->filter(function ($val, $key) {
            return $val['harga'] < 1000000;
        });

        dump( $hasil );

        // Method where & firstWhere
        dump( $collection->where('harga', 790000));
        dump( $collection->where('harga','>=', 1000000));

        $hasil = $collection->firstWhere('harga','>=',500000);
        echo $hasil['namaProduk']. "<br>";

        $hasil = $collection->where('harga','>=', 100000)->all();

        echo "<br>";

        foreach($hasil as $val) {
            echo $val['namaProduk']. "<br>";
        }

        // Method whereBetween & whereNotBetween
        dump( $collection->whereBetween('harga', [100000, 1000000]));
        dump( $collection->whereNotBetween('harga', [100000, 1000000]));

        // Method whereIn & whereNotIn
        dump( $collection->whereIn('harga', [790000, 900000, 9000000]));
        dump( $collection->whereNotIn('harga', [790000, 900000, 9000000]));

        // Method Pluck
        dump( $collection->pluck("namaProduk"));
    }
    public function collectionEnam()
    {
        $siswa00 = new stdClass();
        $siswa00->nama = "Ucup";
        $siswa00->sekolah = "SMK 1 BATAM";
        $siswa00->jurusan = "TKJ";

        $siswa01 = new stdClass();
        $siswa01->nama = "Budi";
        $siswa01->sekolah = "SMK 5 BATAM";
        $siswa01->jurusan = "TKJ";

        $siswa02 = new stdClass();
        $siswa02->nama = "Yanto";
        $siswa02->sekolah = "SMA 7 Bandung";
        $siswa02->jurusan = "IPA";

        $siswas = collect([
            0 => $siswa00,
            1 => $siswa01,
            2 => $siswa02,
        ]);

        echo $siswas[2]->nama;
        echo "<br>";
        echo $siswas[0]->sekolah;

        echo "<hr>";

        foreach ($siswas as $siswa) {
            echo $siswa->nama;
            echo "<br>";
        }

        $siswa = $siswas->where('nama', "Budi")->first();
        dump($siswa);

        $siswa = $siswas->get(2);
        echo $siswa->nama, "<br>", $siswa->sekolah, "<br>", $siswa->jurusan;

        // Method groupBy
        $hasil = $siswas->groupBy('jurusan');
        dump($hasil);

        $namaJurusanIpa = $siswas->groupBy('jurusan')->get('TKJ')->pluck('nama')->all();
        echo 'Nama siswa jurusan IPA : ' .implode(', ', $namaJurusanIpa);
    }

    public function exercise()
    {
        $matkul00 = new stdClass();
        $matkul00->namaMatkul = 'Sistem Operasi';
        $matkul00->jumlahsks = 3;
        $matkul00->semester = 3 ;

        $matkul01 = new stdClass();
        $matkul01->namaMatkul = 'Algoritma dan Pemograman';
        $matkul01->jumlahsks = 4;
        $matkul01->semester = 1 ;

        $matkul02 = new stdClass();
        $matkul02->namaMatkul = 'Kalkulus Dasar';
        $matkul02->jumlahsks = 2;
        $matkul02->semester = 1 ;

        $matkul03 = new stdClass();
        $matkul03->namaMatkul = 'Basis Data';
        $matkul03->jumlahsks = 2;
        $matkul03->semester = 3 ;

        $matkuls = collect([$matkul00, $matkul01, $matkul02, $matkul03]);

        // Soal 1
        $matkulsSem3 = $matkuls->groupBy('semester')->get(3)->pluck('namaMatkul')->all();
        echo 'Nama mata kuliah semester 3 : '.implode(', ', $matkulsSem3);

        echo "<br>";
        echo "<br>";

            // Menggunakan method where
        $matkulsSem3 = $matkuls->where('semester', 3);
        $stringMatkul = "";
        foreach ($matkulsSem3 as $matkul) {
            $stringMatkul .= $matkul->namaMatkul.", ";
        }

        echo 'Nama mata kuliah semester 3 : '.substr($stringMatkul,0,-2);
        echo "<br>";
        echo "<br>";

        // Soal 2
        $matkulsSort = $matkuls->sortByDesc('jumlahsks');
        $stringMatkul = "";
        foreach($matkulsSort as $matkul) {
         $stringMatkul .= "$matkul->namaMatkul ($matkul->jumlahsks), ";
        }
        echo 'Nama mata kuliah: '.substr($stringMatkul,0,-2);
    }
}
